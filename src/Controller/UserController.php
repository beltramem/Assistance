<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

	/**
 	* @Route("/connecte", name="home_user_auth")
 	*/   
    public function homeUser()
    {
    	return $this->render("main/app/home.html.twig", ["userAuth" => "Utilisateur"]);
    }

}