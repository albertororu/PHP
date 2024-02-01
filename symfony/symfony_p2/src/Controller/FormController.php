<?php
namespace App\Controller;

use App\Form\InsertaTuProductoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producto;
use Symfony\Component\HttpFoundation\Request;
class FormController extends AbstractController
{
    #[Route('/formulario')]
    public function producto(EntityManagerInterface $entityManager, Request $request): Response
    {
 $product = new Producto();
 $form =$this->createForm(InsertaTuProductoType::class, $product);
 $form->handleRequest($request);

 if ($form->isSubmitted() && $form->isValid()) {
    
    $datos = $form->getData();

    $entityManager->persist($datos);
    $entityManager->flush();
    
    return $this ->render('listo.html.twig',['form'=>$form->createView()]);
 }
 
 return $this ->render('index.html.twig',['form'=>$form->createView()]);

 
}
}



