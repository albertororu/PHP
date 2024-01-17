<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class saludoController extends AbstractController{

      #[Route("/saludo/{nombre?}")]
public function saludar($nombre){

    $nombre = $nombre ?? 'usuario';
    return $this->render('saludo.html.twig', ['nombre'=>$nombre,]);
}
}
?>