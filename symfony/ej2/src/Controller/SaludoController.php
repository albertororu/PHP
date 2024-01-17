<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;


class SaludoController{

      #[Route("/saludo/{nombre?}")]
public function saludar($nombre){

    $nombre = $nombre ?? 'usuario';
   if(preg_match('/^[a-zA-ZñÑ]+$/', $nombre)){
      $greet = sprintf("Bienvenido %s", $nombre);
  }else{
      $greet = "ERROR - CARÁCTER INVÁLIDO EN EL NOMBRE";
  }
  die ($greet);
}
}
?>