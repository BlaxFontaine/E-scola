<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Users;
use App\Entity\Classes;
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
     * @Groups ("user")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=users::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     * @Groups ("classes")
     * @Groups ("user")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=classes::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("teachers")
     */
    private $classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?users
    {
        return $this->name;
    }

    public function setName(users $name): self
    {
        $this->name = $name;

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
