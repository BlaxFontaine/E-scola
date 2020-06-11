<?php

namespace App\Entity;

use App\Entity\Lessons;
use App\Entity\Students;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AssigmentsRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AssigmentsRepository::class)
 */
class Assigments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=students::class, inversedBy="assigments")
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("assig")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity=lessons::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("student")
     * @Groups ("assig")
     */
    private $lessons;

        /**
     * @ORM\Column(type="integer")
     * @Groups ("student")
     * @Groups ("assig")
     */
    private $mark;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?students
    {
        return $this->student;
    }

    public function setStudent(?students $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getLessons(): ?lessons
    {
        return $this->lessons;
    }

    public function setLessons(?lessons $lessons): self
    {
        $this->lessons = $lessons;

        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }
}
