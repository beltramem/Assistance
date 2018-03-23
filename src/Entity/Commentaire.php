<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repoitory\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $id_commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu_com;

    public function getId()
    {
        return $this->id;
    }

    public function getIdCommentaire(): ?int
    {
        return $this->id_commentaire;
    }

    public function setIdCommentaire(int $id_commentaire): self
    {
        $this->id_commentaire = $id_commentaire;

        return $this;
    }

    public function getContenuCom(): ?string
    {
        return $this->contenu_com;
    }

    public function setContenuCom(string $contenu_com): self
    {
        $this->contenu_com = $contenu_com;

        return $this;
    }
}
