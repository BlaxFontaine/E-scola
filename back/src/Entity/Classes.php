<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClassesRepository;
use App\Entity\Teachers;
use App\Entity\Users;
use App\Entity\Activities;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ClassesRepository::class)
 */
class Classes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("classes")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Groups ("teachers")
     * @Groups ("classes")
     * @Groups ("activities")
     * @Groups ("caregivers")
     * @Groups ("user")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=Teachers::class, mappedBy="classe", cascade={"persist", "remove"})
     * @Groups ("classes")
     * @Groups ("user")
     */
    private $teachersName;

    /**
     * @ORM\ManyToMany(targetEntity=Activities::class, mappedBy="classe")
     */
    private $activities;

    public function __construct()
    {
        $this->name = new ArrayCollection();
        $this->activities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   
    public function getName(): ?string
    {
        return $this->name;
    }

    public function addName(users $name): self
    {
        if (!$this->name->contains($name)) {
            $this->name[] = $name;
            $name->setClasses($this);
        }

        return $this;
    }

    public function removeName(users $name): self
    {
        if ($this->name->contains($name)) {
            $this->name->removeElement($name);
            // set the owning side to null (unless already changed)
            if ($name->getClasses() === $this) {
                $name->setClasses(null);
            }
        }

        return $this;
    }

    public function getTeachersName(): ?Teachers
    {
        return $this->teachersName;
    }

    public function setTeachersName(Teachers $teachersName): self
    {
        $this->teachersName = $teachersName;

        // set the owning side of the relation if necessary
        if ($teachersName->getClasse() !== $this) {
            $teachersName->setClasse($this);
        }

        return $this;
    }

    /**
     * @return Collection|Activities[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activities $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->addClasse($this);
        }

        return $this;
    }

    public function removeActivity(Activities $activity): self
    {
        if ($this->activities->contains($activity)) {
            $this->activities->removeElement($activity);
            $activity->removeClasse($this);
        }

        return $this;
    }
}
