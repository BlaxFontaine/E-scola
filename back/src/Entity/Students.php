<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentsRepository;
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
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     */
    private $firstname;

        /**
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     */
    private $lastname;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="students")
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("students")
     * @Groups ("student")
     */
    private $classe;

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
}
