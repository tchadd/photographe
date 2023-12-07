<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PresentationRepository::class)]
class Presentation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $intituleDescription = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $intituleExpertise = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $expertise = null;

    #[ORM\Column(length: 255)]
    private ?string $intituleAutre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $autre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntituleDescription(): ?string
    {
        return $this->intituleDescription;
    }

    public function setIntituleDescription(string $intituleDescription): static
    {
        $this->intituleDescription = $intituleDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getIntituleExpertise(): ?string
    {
        return $this->intituleExpertise;
    }

    public function setIntituleExpertise(string $intituleExpertise): static
    {
        $this->intituleExpertise = $intituleExpertise;

        return $this;
    }

    public function getExpertise(): ?string
    {
        return $this->expertise;
    }

    public function setExpertise(string $expertise): static
    {
        $this->expertise = $expertise;

        return $this;
    }

    public function getIntituleAutre(): ?string
    {
        return $this->intituleAutre;
    }

    public function setIntituleAutre(string $intituleAutre): static
    {
        $this->intituleAutre = $intituleAutre;

        return $this;
    }

    public function getAutre(): ?string
    {
        return $this->autre;
    }

    public function setAutre(string $autre): static
    {
        $this->autre = $autre;

        return $this;
    }
}
