<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("caregivers")
     * @Groups ("user")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("teachers")
     * @Groups ("caregivers")
     * @Groups ("students")
     * @Groups ("user")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("teachers")
     * @Groups ("caregivers")
     * @Groups ("students")
     * @Groups ("user")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("user")
     * @Groups ("teachers")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("caregivers")     
     * @Groups ("studetns")
     * @Groups ("user")
     */
    private $childcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("user")
     * @Groups ("teachers")
     */
    private $password;

        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("user")
     * @Groups ("teachers")
     */
    private $role;

    /**
     * @ORM\ManyToOne(targetEntity=Classes::class, inversedBy="name")
     * @ORM\JoinColumn(nullable=true)
     * @Groups ("caregivers")
     * @Groups ("students")
     * @Groups ("user")
     * @Groups ("teachers")
     */
    private $classes;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getChildcode(): ?string
    {
        return $this->childcode;
    }

    public function setChildcode(string $childcode): self
    {
        $this->childcode = $childcode;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getClasses(): ?Classes
    {
        return $this->classes;
    }

    public function setClasses(?Classes $classes): self
    {
        $this->classes = $classes;

        return $this;
    }
   
}
