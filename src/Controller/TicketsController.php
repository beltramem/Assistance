<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Ticket;
use App\Entity\Urgence;
use App\Entity\Probleme;
use App\Entity\TypeProbleme;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;


class TicketsController extends Controller
{

	/**
 	* @Route("/userConnecte/createTicket", name="create_ticket")
 	* @Template("main/app/tickets/create.html.twig")
 	*/   
    public function create(Request $request)
    {
		$ticket = new Ticket();
    	$form = $this->createFormBuilder($ticket)
   		->add("urgence", EntityType::class, array(
			'required'   => true,
			'label' => 'Urgence :',
   			'class' => Urgence::class,
			'choice_label' => 'libelle_urgence'
			))
		->add("probleme", EntityType::class, array(
			'required'   => true,
			'label' => 'Probleme :',
   			'class' => Probleme::class,
			'choice_label' => 'libelle_prob'
			))
			->add("typeprobleme", EntityType::class, array(
			'required'   => true,
			'label' => 'Type de Probleme :',
   			'class' => TypeProbleme::class,
			'choice_label' => 'libelle_type'
			))
		->add("intitule", TextType::class, array(
			'required'   => true,
		   'label' => 'Intitulé :',
           'attr' => array('size' => '50px')
          ))
		
		->add("batiment", ChoiceType::class,array(
		'required'=> true,
		'label' => 'Batiment : ',
		'choices'=> array(
		'A' => 'A',
		'B' => 'B',
		'C' => 'D')))
		->add("salle", TextType::class, array(
		'required'=> true,
		'label' => 'Salle : '))
		->add("poste", TextType::class, array(
		'required'=> true,
		'label' => 'Poste : '))
		
		->add("description", TextareaType::class, array(
		'required'=> true,
		'label' => 'Description :',
		'attr' => array('Size'=>'400px')))
   		->add("save", SubmitType::class, ["label" => "Envoyer"])

   		->getForm();
    
    	$result=[];
		$form->handleRequest($request);
		if ( $form->isSubmitted() && $form->isValid()) {
			$ticket->setDate_De_Creation(new DateTime());
			$em = $this->getDoctrine()->getManager();
			$em->persist($ticket);
			$em->flush();
		}
		
		return ["ticket" => $ticket,"form" => $form->createView(), "result" => $result];
    	
    }
	
		/**
     * @Route("/userConnecte/consulter/{ticket}", name="ticket.consulter")
	 * @Template("main/product/consulter.html.twig")
     */
	public function consulter(Ticket $ticket)
	{
		$em = $this->getDoctrine()->getManager();
		return["ticket" => $ticket];
	}


    /**
 	* @Route("/userConnecte/viewTicket", name="view_ticket")
 	* @Template("main/app/tickets/view.html.twig")
 	*/   
	public function view()
	{
		$em = $this->getDoctrine()->getManager();
        $tickets = $em->getRepository(Ticket::class)->findAll();
        return ["ticket" => $tickets];
	}	




}