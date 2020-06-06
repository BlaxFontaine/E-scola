<?php

namespace App\Entity;

use App\Entity\Classes;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActivitiesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ActivitiesRepository::class)
 */
class Activities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("activities")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("activities")
     * @Groups ("lessons")
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=classes::class, inversedBy="activities")
     * @Groups ("activities")
     * @groups ("lessons")
     */
    private $classe;

    public function __construct()
    {
        $this->classe = new ArrayCollection();
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
     * @return Collection|classes[]
     */
    public function getClasse(): Collection
    {
        return $this->classe;
    }

    public function addClasse(classes $classe): self
    {
        if (!$this->classe->contains($classe)) {
            $this->classe[] = $classe;
        }

        return $this;
    }

    public function removeClasse(classes $classe): self
    {
        if ($this->classe->contains($classe)) {
            $this->classe->removeElement($classe);
        }

        return $this;
    }
}
