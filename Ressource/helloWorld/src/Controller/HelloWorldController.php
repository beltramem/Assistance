<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class.

class HelloWorldController extends Controller
{

    /**
     * @Route("/hello/{name}", name="app_hello") //add this comment to annotations
	 * @Template("main/home.html.twig")
     */
    public function hello($name="World")
    {

        return new Response(
            "Hello " . $name
        );
    }

}