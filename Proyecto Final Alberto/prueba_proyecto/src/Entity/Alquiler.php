<?php

namespace App\Entity;

use App\Repository\AlquilerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlquilerRepository::class)]
class Alquiler
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Dia = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $Hora = null;

    #[ORM\ManyToOne(inversedBy: 'alquilers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'alquilers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pista $id_pista = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDia(): ?\DateTimeInterface
    {
        return $this->Dia;
    }

    public function setDia(\DateTimeInterface $Dia): static
    {
        $this->Dia = $Dia;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->Hora;
    }

    public function setHora(\DateTimeInterface $Hora): static
    {
        $this->Hora = $Hora;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdPista(): ?Pista
    {
        return $this->id_pista;
    }

    public function setIdPista(?Pista $id_pista): static
    {
        $this->id_pista = $id_pista;

        return $this;
    }
}
