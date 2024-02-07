<?php
namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producto;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductoController extends AbstractController{
    #[Route('/producto', name:'producto')]
    public function lista(EntityManagerInterface $entityManager){
      

        // Obtener todos los productos desde la base de datos
        $productos = $entityManager->getRepository(Producto::class)->findAll();

        return $this->render('lista.html.twig', [
            'productos' => $productos,
        ]);
    }

   
    
    
}