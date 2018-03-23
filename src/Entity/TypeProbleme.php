<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeProblemeRepository")
 */
class TypeProbleme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_type;

    public function getId()
    {
        return $this->id;
    }

    public function getIdType(): ?int
    {
        return $this->id_type;
    }

    public function setIdType(int $id_type): self
    {
        $this->id_type = $id_type;

        return $this;
    }

    public function getLibelleType(): ?string
    {
        return $this->libelle_type;
    }

    public function setLibelleType(?string $libelle_type): self
    {
        $this->libelle_type = $libelle_type;

        return $this;
    }
}
