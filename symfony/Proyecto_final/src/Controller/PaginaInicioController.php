<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PaginaInicioController extends AbstractController{

    #[Route('/inicio', name:'inicio')]
    public function inicio():Response
    {

        return $this ->render('inicio.html.twig');
    } 
}