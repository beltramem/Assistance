<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

	/**
 	* @Route("/userConnecte", name="home_user_auth")
 	* @Template("main/app/home.html.twig")
 	*/   
    public function homeUser()
    {
    	//fonction qui vérifie lutilsateur connecté et son type 

    	return ["userAuth" => "Utilisateur"];
    }


    /**
 	* @Route("/", name="auth")
 	* @Template("main/auth.html.twig")
 	*/
    public function signOut()
    {
    	//fonction de déconnexion
    }

}