<?php

namespace App\Entity;

use App\Entity\Caregivers;
use App\Entity\Assigments;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentsRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=StudentsRepository::class)
 */
class Students
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     * @Groups ("assig")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     * @Groups ("caregivers")
     * @Groups ("assig")
     */
    private $firstname;

        /**
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     * @Groups ("caregivers")
     * @Groups ("assig")
     */
    private $lastname;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="students", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("caregivers")
     */
    private $classe;

    /**
     * @ORM\OneToMany(targetEntity=Caregivers::class, mappedBy="child")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     */
    private $caregiver;

    /**
     * @ORM\OneToMany(targetEntity=Assigments::class, mappedBy="student")
     * @Groups ("student")
     */
    private $assigments;


    public function __construct()
    {
        $this->caregiver = new ArrayCollection();
        $this->notes = new ArrayCollection();
        $this->assigments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstame(string $firstname): self
    {
        $this->lastname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastame(string $lastname): self
    {
        $this->lastname = $lastname;

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

    /**
     * @return Collection|Caregivers[]
     */
    public function getCaregiver(): Collection
    {
        return $this->caregiver;
    }

    public function addCaregiver(Caregivers $caregiver): self
    {
        if (!$this->caregiver->contains($caregiver)) {
            $this->caregiver[] = $caregiver;
            $caregiver->setChild($this);
        }

        return $this;
    }

    public function removeCaregiver(Caregivers $caregiver): self
    {
        if ($this->caregiver->contains($caregiver)) {
            $this->caregiver->removeElement($caregiver);
            // set the owning side to null (unless already changed)
            if ($caregiver->getChild() === $this) {
                $caregiver->setChild(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Assigments[]
     */
    public function getAssigments(): Collection
    {
        return $this->assigments;
    }

    public function addAssigment(Assigments $assigment): self
    {
        if (!$this->assigments->contains($assigment)) {
            $this->assigments[] = $assigment;
            $assigment->setStudent($this);
        }

        return $this;
    }

    public function removeAssigment(Assigments $assigment): self
    {
        if ($this->assigments->contains($assigment)) {
            $this->assigments->removeElement($assigment);
            // set the owning side to null (unless already changed)
            if ($assigment->getStudent() === $this) {
                $assigment->setStudent(null);
            }
        }

        return $this;
    }

}
