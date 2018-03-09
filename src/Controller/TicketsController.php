<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class TicketsController extends Controller
{

	/**
 	* @Route("/userConnecte/createTicket", name="create_ticket")
 	* @Template("main/app/tickets/create.html.twig")
 	*/   
    public function create()
    {
    	
    }


    /**
 	* @Route("/userConnecte/viewTicket", name="view_ticket")
 	* @Template("main/app/tickets/view.html.twig")
 	*/   
    public function view()
    {
    	
    }




}