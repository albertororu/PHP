<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController{
    #[Route('/about')]
    public function about(){
        return $this->render('about.html.twig');
    }

    #[Route('/contact')]
    public function contact(){
        die('Alberto el mejor');
    }
}


?>