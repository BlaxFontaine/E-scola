<?php

namespace App\Entity;

use App\Entity\Classes;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TeachersRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TeachersRepository::class)
 */
class Teachers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("teachers")
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
     */
    private $lastname;

        /**
     * @ORM\Column(type="string", length=255)
     * @ORM\JoinColumn(nullable=false)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity=classes::class, inversedBy="teacher", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("students")
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getClasse(): ?classes
    {
        return $this->classe;
    }

    public function setClasse(classes $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}
