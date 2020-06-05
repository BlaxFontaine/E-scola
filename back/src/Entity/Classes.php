<?php

namespace App\Entity;

use App\Repository\ClassesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClassesRepository::class)
 */
class Classes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=Teacher::class, mappedBy="classe", cascade={"persist", "remove"})
     */
    private $teacherName;

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

    /**
     * @return Collection|users[]
     */
    public function getName(): Collection
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

    public function getTeacherName(): ?Teacher
    {
        return $this->teacherName;
    }

    public function setTeacherName(Teacher $teacherName): self
    {
        $this->teacherName = $teacherName;

        // set the owning side of the relation if necessary
        if ($teacherName->getClasse() !== $this) {
            $teacherName->setClasse($this);
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
