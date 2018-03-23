<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DemandeurRepository")
 */
class Demandeur
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
    private $id_demandeur;

    public function getId()
    {
        return $this->id;
    }

    public function getIdDemandeur(): ?int
    {
        return $this->id_demandeur;
    }

    public function setIdDemandeur(int $id_demandeur): self
    {
        $this->id_demandeur = $id_demandeur;

        return $this;
    }
}
