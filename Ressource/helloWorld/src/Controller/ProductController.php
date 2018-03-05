<?php
namespace App\Controller;
use App\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class.

class ProductController extends Controller
{
		
    /**
     * @Route("/product")
	 * @Template("main/product/homeProduct.html.twig")
     */
	public function acc()
    {

        return ["project_name" => "ProductACC"];
    }
	    /**
     * @Route("/product/add", name="product.add")
	 * @Template("main/product/add.html.twig")
     */
	public function add(Request $request)
	 {
		 $product = new Product();
		 $form = $this->createFormBuilder($product)
		->add("name", TextType::class)
		->add("releaseOn", DateType::class, [
			"widget" => "single_text"
		])
		->add("save", SubmitType::class, ["label" => "create Product"])
		->getForm();
		
		$result = [];
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		$em = $this->getDoctrine()->getManager();
        $em->persist($product);
		$em->flush();
		}		
		
        return ["product" => $product,"form" => $form->createView(), "result" => $result];
	 }
	 
	     /**
     * @Route("/product/all", name="product.all")
	 * @Template("main/product/all.html.twig")
     */
	public function all()
	{
		$em = $this->getDoctrine()->getManager();
        $products = $em->getRepository(Product::class)->findAll();
        return ["products" => $products];
	}	     
	/**
     * @Route("/product/show/{product}", name="product.show")
	 * @Template("main/product/show.html.twig")
     */
	public function show(Product $product)
	{
		$em = $this->getDoctrine()->getManager();
		return["product" => $product];
	}
	/**
     * @Route("/product/update/{product}", name="product.update")
	 * @Template("main/product/add.html.twig")
     */
	public function update(Product $product,Request $request)
	{
		$form = $this->createFormBuilder($product)
		->add("name", TextType::class)
		->add("releaseOn", DateType::class, [
			"widget" => "single_text"
		])
		->add("save", SubmitType::class, ["label" => "create Product"])
		->getForm();
		
		$result = [];
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		$em = $this->getDoctrine()->getManager();
        $em->persist($product);
		$em->flush();
		}		
		
        return ["product" => $product,"form" => $form->createView(), "result" => $result];
	}	
	/**
     * @Route("/product/delete/{product}", name="product.delete")
	 * @Template("main/product/delete.html.twig")
     */
	public function delete(Product $product)
	{
		$em = $this->getDoctrine()->getManager();
		$em->remove($product);
		$em->flush();
		return $this->redirectToRoute("product.all");		
	}
	
}