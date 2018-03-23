<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PosteRepository")
 */
class Poste
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
    private $id_poste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_poste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type_logiciel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type_materiel;

    public function getId()
    {
        return $this->id;
    }

    public function getIdPoste(): ?int
    {
        return $this->id_poste;
    }

    public function setIdPoste(int $id_poste): self
    {
        $this->id_poste = $id_poste;

        return $this;
    }

    public function getNomPoste(): ?string
    {
        return $this->nom_poste;
    }

    public function setNomPoste(?string $nom_poste): self
    {
        $this->nom_poste = $nom_poste;

        return $this;
    }

    public function getTypeLogiciel(): ?string
    {
        return $this->type_logiciel;
    }

    public function setTypeLogiciel(?string $type_logiciel): self
    {
        $this->type_logiciel = $type_logiciel;

        return $this;
    }

    public function getTypeMateriel(): ?string
    {
        return $this->type_materiel;
    }

    public function setTypeMateriel(?string $type_materiel): self
    {
        $this->type_materiel = $type_materiel;

        return $this;
    }
}
