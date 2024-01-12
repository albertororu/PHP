<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController{
    #[Route('/home', name:'home')]
    public function home(){
        die('Hola compañero');
    }
}


?>