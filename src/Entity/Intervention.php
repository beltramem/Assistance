<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterventionRepository")
 */
class Intervention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $id_intervention;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $info_intervention;

    public function getId()
    {
        return $this->id;
    }

    public function getIdIntervention(): ?int
    {
        return $this->id_intervention;
    }

    public function setIdIntervention(int $id_intervention): self
    {
        $this->id_intervention = $id_intervention;

        return $this;
    }

    public function getInfoIntervention(): ?string
    {
        return $this->info_intervention;
    }

    public function setInfoIntervention(?string $info_intervention): self
    {
        $this->info_intervention = $info_intervention;

        return $this;
    }
}
