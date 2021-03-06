<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProblemeRepository")
 */
class Probleme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
	 
    private $id_prob;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_prob;


    public function getIdProb()
    {
        return $this->id_prob;
    }

    public function setIdProb(int $id_prob)
    {
        $this->id_prob = $id_prob;

        return $this;
    }

    public function getLibelleProb()
    {
        return $this->libelle_prob;
    }

    public function setLibelleProb(string $libelle_prob)
    {
        $this->libelle_prob = $libelle_prob;

        return $this;
    }
}
