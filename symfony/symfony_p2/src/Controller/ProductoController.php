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

    #[Route('/carrito')]
    public function agregarAlCarrito(Request $request): Response
    {
        // Obtener el ID del producto enviado desde el formulario
        $productoId = $request->request->get('id');

        // Obtener la sesión del usuario
        $session = $request->getSession();

        // Obtener o inicializar el carrito en la sesión
        $carrito = $session->get('carrito', []);

        // Agregar el ID del producto al carrito
        $carrito[] = $productoId;

        // Guardar el carrito en la sesión
        $session->set('carrito', $carrito);

        // Redirigir al usuario a la página del carrito
        return $this->redirectToRoute('carrito_ver');
    }

    #[Route('/carrito/ver', name:'carrito_ver')]
    public function verCarrito(Request $request): Response
    {
        // Obtener la sesión del usuario
        $session = $request->getSession();

        // Obtener el carrito de la sesión
        $carrito = $session->get('carrito', []);

        // Aquí podrías usar el ID del producto para buscar los detalles de los productos en tu base de datos
        // y luego mostrarlos en la vista del carrito

        return $this->render('carrito.html.twig', [
            'carrito' => $carrito,
        ]);
    }
    
}