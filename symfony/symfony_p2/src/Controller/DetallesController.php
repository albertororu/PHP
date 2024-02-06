<?php
namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producto;


class DetallesController extends AbstractController
{
    #[Route('/producto/{nombre}', name: 'detalles_producto')]
    public function detalles(EntityManagerInterface $entityManager, $nombre)
    {

        
        // Buscar productos por el nombre proporcionado
        $productos = $entityManager->getRepository(Producto::class)->findBy(['nombre' => $nombre]);

        return $this->render('detalles.html.twig', [
            'productos' => $productos,
            'nombre' => $nombre,
        ]);
    }
}



