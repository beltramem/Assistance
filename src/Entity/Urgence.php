<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UrgenceRepository")
 */
class Urgence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_urgence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_urgence;

    public function getId()
    {
        return $this->id;
    }

    public function getIdUrgence(): ?int
    {
        return $this->id_urgence;
    }

    public function setIdUrgence(int $id_urgence): self
    {
        $this->id_urgence = $id_urgence;

        return $this;
    }

    public function getLibelleUrgence(): ?string
    {
        return $this->libelle_urgence;
    }

    public function setLibelleUrgence(?string $libelle_urgence): self
    {
        $this->libelle_urgence = $libelle_urgence;

        return $this;
    }
}
