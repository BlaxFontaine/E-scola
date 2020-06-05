<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MascotRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=MascotRepository::class)
 */
class Mascot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("mascot")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("mascot")
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("mascot")
     */
    private $sentence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("mascot")
     */
    private $img;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getSentence(): ?string
    {
        return $this->sentence;
    }

    public function setSentence(string $sentence): self
    {
        $this->sentence = $sentence;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }
}
