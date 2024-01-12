<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController{
    #[Route('/redirect')]
    public function redirectHome(){
        return $this->redirectToRoute('home');
    }

    #[Route('/external')]
    public function externalHome(){
        return $this->redirect('https://sites.google.com/iesromerovargas.com/romerovargas/inicio');
    }

}

?>