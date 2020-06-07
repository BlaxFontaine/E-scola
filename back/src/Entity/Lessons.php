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
     * @Groups ("stuact")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("teachers")
     * @Groups ("student")
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     * @Groups ("teachers")
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     * @Groups ("teachers")
     * @Groups ("classes")
     * @Groups ("stuact")
     */
    private $end;

    /**
     * @ORM\ManyToOne(targetEntity=Activities::class, inversedBy="lessons")
     */
    private $activity;

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
        $this->start = $end;

        return $this;
    }

    public function getActivity(): ?Activities
    {
        return $this->activity;
    }

    public function setActivity(?Activities $activity): self
    {
        $this->activity = $activity;

        return $this;
    }
}
