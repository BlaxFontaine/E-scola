<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessagesRepository::class)
 */
class Messages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ("mess")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("mess")
     */
    private $sender;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ("mess")
     */
    private $receiver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("mess")
     */
    private $object;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("mess")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
