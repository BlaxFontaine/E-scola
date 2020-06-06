<?php

namespace App\Entity;

use App\Entity\Activities;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LessonsRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=LessonsRepository::class)
 */
class Lessons
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("lessons")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("lessons")
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=activities::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("lessons")
     */
    private $activities;

    /**
     * @ORM\Column(type="date")
     * @Groups ("lessons")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     * @Groups ("lessons")
     */
    private $end;

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

    public function getActivities(): ?activities
    {
        return $this->activities;
    }

    public function setActivities(?activities $activities): self
    {
        $this->activities = $activities;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }
}
