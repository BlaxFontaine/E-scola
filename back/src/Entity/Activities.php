<?php

namespace App\Entity;

use App\Entity\Lessons;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActivitiesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ActivitiesRepository::class)
 */
class Activities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("stuact")
     */
    private $id;

       /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("student")
     * @Groups ("classes")
     * @Groups ("stuact")
     * @Groups ("teachers")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=lessons::class, mappedBy="activity")
     * @Groups ("teachers")
     * @Groups ("student")
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $lessons;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;


    public function __construct()
    {
        $this->lessons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|lessons[]
     */
    public function getLessons(): Collection
    {
        return $this->lessons;
    }

    public function addLesson(lessons $lesson): self
    {
        if (!$this->lessons->contains($lesson)) {
            $this->lessons[] = $lesson;
            $lesson->setActivity($this);
        }

        return $this;
    }

    public function removeLesson(lessons $lesson): self
    {
        if ($this->lessons->contains($lesson)) {
            $this->lessons->removeElement($lesson);
            // set the owning side to null (unless already changed)
            if ($lesson->getActivity() === $this) {
                $lesson->setActivity(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getClasse(): ?Classes
    {
        return $this->classe;
    }

    public function setClasse(?Classes $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

}
