<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class..

class MainController extends Controller
{ 
    /**
     * @Route("/", name="app_home")
     * @Template("main/app/home.html.twig")
     */
    public function homeAction()
    {
        return ["project_name" => "l'Assistance"];
    }
}