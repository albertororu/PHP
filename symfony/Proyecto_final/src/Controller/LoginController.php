<?php
namespace App\Controller;

use App\Form\InsertaUsuarioType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;
class LoginController extends AbstractController
{
    #[Route('/formulario', name: 'formulario')]
    public function usuario(EntityManagerInterface $entityManager, Request $request): Response
    {
 $usuario = new Usuario();
 $form =$this->createForm(InsertaUsuarioType::class, $usuario);
 $form->handleRequest($request);

 if ($form->isSubmitted() && $form->isValid()) {
    
    $datos = $form->getData();

    $entityManager->persist($datos);
    $entityManager->flush();
    
 }
 
 return $this ->render('index.html.twig',['form'=>$form->createView()]);

 
}
}

