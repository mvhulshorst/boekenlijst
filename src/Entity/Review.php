<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ReviewId;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Boek", inversedBy="reviews")
     */
    private $BoekId;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="text")
     */
    private $Name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReviewId(): ?int
    {
        return $this->ReviewId;
    }

    public function setReviewId(int $ReviewId): self
    {
        $this->ReviewId = $ReviewId;

        return $this;
    }

    public function getBoekId(): ?Boek
    {
        return $this->BoekId;
    }

    public function setBoekId(?Boek $BoekId): self
    {
        $this->BoekId = $BoekId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
