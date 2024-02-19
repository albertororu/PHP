<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Producto;

class CarritoController extends AbstractController {
    #[Route('/carrito')]
    function añadirCarrito(Request $request){
        $session = $request->getSession();

        $carrito = $session->get('carrito');
        if (is_null($carrito)){
            $carrito = [];
        }
        array_push($carrito, $_GET['id']);
        $session->set('carrito', $carrito);

        return $this->redirectToRoute('home');

    }

    #[Route('/verCarrito', name:'verCarrito')]
    function verCarrito(Request $request,  EntityManagerInterface $entityManager) {
        $session = $request->getSession();
        $repository = $entityManager->getRepository(producto::class);
        
        $carrito = $session->get('carrito');

        $carritoProductos = [];
        foreach ($carrito as $id) {
            $producto = $repository->findOneBy(['id' => $id]);
            array_push($carritoProductos, $producto);
        }
        return $this->render('carrito.html.twig', ['carrito' => $carritoProductos]);
    }

    #[Route('/limpiar')]
    function limpiar(Request $request) {
        $session = $request->getSession();
        $session->set('carrito', []);
        return $this->redirectToRoute('verCarrito');
    }
}

