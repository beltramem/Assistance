<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OperateurRepository")
 */
class Operateur
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
    private $id_operateur;

    /**
     * @ORM\Column(type="binary")
     */
    private $responsable_service;

    public function getId()
    {
        return $this->id;
    }

    public function getIdOperateur(): ?int
    {
        return $this->id_operateur;
    }

    public function setIdOperateur(int $id_operateur): self
    {
        $this->id_operateur = $id_operateur;

        return $this;
    }

    public function getResponsableService()
    {
        return $this->responsable_service;
    }

    public function setResponsableService($responsable_service): self
    {
        $this->responsable_service = $responsable_service;

        return $this;
    }
}
