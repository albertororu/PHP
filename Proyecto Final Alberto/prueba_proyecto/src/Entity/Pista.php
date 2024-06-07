<?php

namespace App\Entity;

use App\Repository\PistaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PistaRepository::class)]
class Pista
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo = null;

    #[ORM\OneToMany(targetEntity: Alquiler::class, mappedBy: 'id_pista', orphanRemoval: true)]
    private Collection $alquilers;

    

    public function __construct()
    {
        $this->alquilers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function __toString()
    {
        return(string) $this->getId();
    }

    /**
     * @return Collection<int, Alquiler>
     */
    public function getAlquilers(): Collection
    {
        return $this->alquilers;
    }

    public function addAlquiler(Alquiler $alquiler): static
    {
        if (!$this->alquilers->contains($alquiler)) {
            $this->alquilers->add($alquiler);
            $alquiler->setIdPista($this);
        }

        return $this;
    }

    public function removeAlquiler(Alquiler $alquiler): static
    {
        if ($this->alquilers->removeElement($alquiler)) {
            // set the owning side to null (unless already changed)
            if ($alquiler->getIdPista() === $this) {
                $alquiler->setIdPista(null);
            }
        }

        return $this;
    }
}
