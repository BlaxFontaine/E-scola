<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Teachers;
use App\Entity\Students;
use App\Entity\Activities;
use App\Repository\ClassesRepository;
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
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("teachers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("classes")
     * @Groups ("stuclas")
     * @Groups ("stuact")
     */
    private $name;

            /**
     * @ORM\OneToOne(targetEntity=Teachers::class, mappedBy="classe", cascade={"persist", "remove"})
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $teacher;

    /**
     * @ORM\OneToMany(targetEntity=students::class, mappedBy="classe")
     * @Groups ("teachers")
     * @Groups ("stuclas")
     */
    private $students;

    /**
     * @ORM\OneToMany(targetEntity=activities::class, mappedBy="classe")
     * @Groups ("teachers")
     * @Groups ("student")
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $activities;

    public function __construct()
    {
        $this->students = new ArrayCollection();
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

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|students[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(students $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setClasse($this);
        }

        return $this;
    }

    public function removeStudent(students $student): self
    {
        if ($this->students->contains($student)) {
            $this->students->removeElement($student);
            // set the owning side to null (unless already changed)
            if ($student->getClasse() === $this) {
                $student->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|activities[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(activities $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->setClasse($this);
        }

        return $this;
    }

    public function removeActivity(activities $activity): self
    {
        if ($this->activities->contains($activity)) {
            $this->activities->removeElement($activity);
            // set the owning side to null (unless already changed)
            if ($activity->getClasse() === $this) {
                $activity->setClasse(null);
            }
        }

        return $this;
    }

    public function getTeacher(): ?Teachers
    {
        return $this->teacher;
    }

    public function setTeacher(Teachers $teacher): self
    {
        $this->teacher = $teacher;

        // set the owning side of the relation if necessary
        if ($teacher->getClasse() !== $this) {
            $teacher->setClasse($this);
        }

        return $this;
    }
}
