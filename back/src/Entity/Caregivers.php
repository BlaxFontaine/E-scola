<?php

namespace App\Entity;

use App\Entity\Users;
use App\Entity\Classes;
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
     * @Groups ("caregivers")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=users::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("caregivers")
     */
    private $details;

    /**
     * @ORM\OneToOne(targetEntity=users::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("caregivers")
     */
    private $child;

    /**
     * @ORM\OneToOne(targetEntity=classes::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("caregivers")
     */
    private $childClasse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetails(): ?users
    {
        return $this->details;
    }

    public function setDetails(users $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getChild(): ?users
    {
        return $this->child;
    }

    public function setChild(users $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getChildClasse(): ?classes
    {
        return $this->childClasse;
    }

    public function setChildClasse(classes $childClasse): self
    {
        $this->childClasse = $childClasse;

        return $this;
    }
}
