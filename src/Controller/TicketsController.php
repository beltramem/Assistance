<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Product;

class TicketsController extends Controller
{

	/**
 	* @Route("/userConnecte/createTicket", name="create_ticket")
 	* @Template("main/app/tickets/create.html.twig")
 	*/   
    public function create(Request $request)
    {
    	$form = $this->createFormBuilder()

   		// ->add("nature", RadioType::class ,array(
     //         'value' => array('Logiciel','Matériel')))

   		->add("importance", ChoiceType::class, array(
   			'choices' => array('très important' => 'Timportant', 
   							   'important' => 'important',
   							   'peu important' => 'Pimportant')))

   		->add("save", SubmitType::class, ["label" => "Envoyer"])

   		->getForm();
    
    	$result = [];
		$form->handleRequest($request);
		if ( $form->isSubmitted() && $form->isValid()) {
		    $result = $form->getData();
		}
		
		return ["form" => $form->createView(), "result" => $result];
    	
    }


    /**
 	* @Route("/userConnecte/viewTicket", name="view_ticket")
 	* @Template("main/app/tickets/view.html.twig")
 	*/   
    public function view()
    {
    	
    }




}