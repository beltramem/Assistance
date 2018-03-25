<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Urgence;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{

    /**
     * @ORM\OneToOne(targetEntity="Urgence", inversedBy="tickets")
	 * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
	 private $urgence;
	 
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
	private $id_ticket;

	 /**
	 * @ORM\Column(type="text", length=255)
	 */
	private $intitule;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	private $date_de_creation;
	
	 /**
	 * @ORM\Column(type="text", length=255)
	 */
	private $description;
	
	 /**
	 * @ORM\Column(type="text", length=255, nullable=true)
	 */
	private $chemin_doc;
	
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $date_de_resolution;
	
	
	/* @ORM\Column(type="integer")
    */
	private $nb_redirection;

	
	
	
	public function getId_ticket()
  {
    return $this->id_ticket;
  }	
	public function getIntitule()
  {
    return $this->intitule;
  }	
  public function getDate_de_creation()
  {
    return $this->date_de_creation;
  }
	public function getDescription()
	{
		return $this->description;
	}	
	public function getChemin_doc()
	{
		return $this->chemin_doc;
	}	
	public function getDate_de_resolution()
	{
		return $this->date_de_resolution;
	}	
	public function getCommentaire()
	{
		return $this->commentaire;
	}	
	public function getNb_redirection()
	{
		return $this->nb_redirection;
	}
	public function getUrgence()
	{
		return $this->urgence;
	}
	
	
  public function setIntitule($pIntitule)
  {
    $this->intitule=$pIntitule;
  }	
  public function setDate_de_creation($pDate_de_creation)
  {
    $this->date_de_creation= $pDate_de_creation;
  }
  public function setDescription($pDescription)
  {
	  $this->description=$pDescription;
  }
  public function setChemin_doc($pChemin_doc)
  {
	  $this->chemin_doc=$pChemin_doc;
  }  
  public function setDate_de_resolution($pDate_de_resolution)
  {
	  $this->date_de_resolution=$pDate_de_resolution;
  }  
  public function setCommentaire($pCommentaire)
  {
	  $this->commentaire=$pCommentaire;
  }  
  public function setNb_redirection($pNb_redirection)
  {
	  $this->nb_redirection=$pNb_redirection;
  }
   public function setUrgence($pUrgence)
  {
	  $this->urgence=$pUrgence;
  }
  
   /**
  * @ORM\Column(type="string", length=1)
  */
 private $batiment;
  
   public function getBatiment()
   {
       return $this->batiment;
   }
      public function setBatiment(string $batiment)
   {
       $this->batiment = $batiment;
       return $this;
   }
   
   /**
    * @ORM\Column(type="string", length=3)
    */
   private $salle;
   public function getSalle()
   {
       return $this->salle;
   }
   public function setSalle(string $salle)
   {
       $this->salle = $salle;
       return $this;
   }
   
      /**
    * @ORM\Column(type="string", length=2)
    */
   private $poste;
   
   public function getPoste()
   {
       return $this->poste;
   }
   public function setPoste(string $poste)
   {
       $this->poste = $poste;
       return $this;
   }
  
}
