<?php

namespace App\Entity;

use App\Entity\Students;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CaregiversRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CaregiversRepository::class)
 */
class Caregivers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("caregivers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("caregivers")
     * @Groups ("students")
     * @Groups ("student")
     * @Groups ("stuclas")
     */
    private $lastname;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $childcode;

    /**
     * @ORM\ManyToOne(targetEntity=students::class, inversedBy="caregiver")
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("caregivers")
     */
    private $child;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("stuclas")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

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

    public function getChildcode(): ?int
    {
        return $this->childcode;
    }

    public function setChildcode(string $childcode): self
    {
        $this->childcode = $childcode;

        return $this;
    }

    public function getChild(): ?students
    {
        return $this->child;
    }

    public function setChild(?students $child): self
    {
        $this->child = $child;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
