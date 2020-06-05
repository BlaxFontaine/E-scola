<?php

namespace App\Entity;

use App\Repository\VisitorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisitorRepository::class)
 */
class Visitor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $home;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pupils;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $teacher;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $caregiver;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHome(): ?string
    {
        return $this->home;
    }

    public function setHome(?string $home): self
    {
        $this->home = $home;

        return $this;
    }

    public function getPupils(): ?string
    {
        return $this->pupils;
    }

    public function setPupils(?string $pupils): self
    {
        $this->pupils = $pupils;

        return $this;
    }

    public function getTeacher(): ?string
    {
        return $this->teacher;
    }

    public function setTeacher(?string $teacher): self
    {
        $this->teacher = $teacher;

        return $this;
    }

    public function getCaregiver(): ?string
    {
        return $this->caregiver;
    }

    public function setCaregiver(?string $caregiver): self
    {
        $this->caregiver = $caregiver;

        return $this;
    }
}
