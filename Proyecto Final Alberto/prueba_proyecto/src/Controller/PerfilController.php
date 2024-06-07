<?php

namespace App\Controller;

use App\Entity\Alquiler;
use App\Form\EditaPerfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerfilController extends AbstractController
{
    #[Route('/perfil/editar', name: 'perfil_editar')]
    public function editarPerfil(Request $request, EntityManagerInterface $entityManager): Response
    {
        $usuario = $this->getUser();
        $form = $this->createForm(EditaPerfilType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Perfil actualizado correctamente.');
            return $this->redirectToRoute('home');
        }

        return $this->render('perfil.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/verCita/{id}', name:'ver_cita')]
    public function verCita(EntityManagerInterface $entityManager) :Response
     {
        $usuario = $this->getUser();

        // Si el usuario no está autenticado, redirigimos a la página de inicio de sesión
        if (!$usuario) {
            return $this->redirectToRoute('app_login');
        }

        // Obtenemos los alquileres asociados al usuario actual
        $alquileres = $entityManager->getRepository(Alquiler::class)->findBy(['id_user' => $usuario]);

        // Renderizamos la plantilla para mostrar los alquileres
        return $this->render('detalles.html.twig', [
            'alquileres' => $alquileres,
        ]);
    } 

    #[Route('/eliminarCita/{id}', name: 'eliminar_cita')]
    public function eliminarCita(int $id, EntityManagerInterface $entityManager): Response
    {
        $usuario = $this->getUser();

        // Si el usuario no está autenticado, redirigimos a la página de inicio de sesión
        if (!$usuario) {
            return $this->redirectToRoute('app_login');
        }

        // Obtener el alquiler correspondiente al id proporcionado
        $alquiler = $entityManager->getRepository(Alquiler::class)->find($id);

        // Si no se encuentra el alquiler o no pertenece al usuario actual, redirigir o mostrar un mensaje de error
        if (!$alquiler || $alquiler->getIdUser() !== $usuario) {
            throw $this->createNotFoundException('No se encontró el alquiler o no tienes permiso para eliminarlo.');
        }

        // Eliminar la cita
        $entityManager->remove($alquiler);
        $entityManager->flush();

        // Redirigir a una página de confirmación o a donde desees
        return $this->redirectToRoute('home');
    }
}
