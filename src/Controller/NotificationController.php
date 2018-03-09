<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends Controller
{

	/**
 	* @Route("/userConnecte/notification", name="notification")
 	* @Template("main/app/notification/notification_home.html.twig")
 	*/   
    public function homeNotif()
    {
    	
    }

}