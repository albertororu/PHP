<?php 

namespace App\Controller;

use App\Entity\Alquiler;
use App\Form\InsertaAlquilerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlquilerController extends AbstractController
{
    #[Route('/cita', name: 'app_cita')]
    public function insertarAlquiler(Request $request, EntityManagerInterface $entityManager): Response
    {

        $usuario = $this->getUser();

    // Si el usuario no está autenticado, redirigimos a la página de inicio de sesión
        if (!$usuario) {
        $this->addFlash('error', 'Necesitas estar logueado para hacer una reserva.');
        return $this->redirectToRoute('home');
    }
        $alquiler = new Alquiler();
        $form = $this->createForm(InsertaAlquilerType::class, $alquiler);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Verificar disponibilidad
            if ($this->esCitaDisponible($alquiler, $entityManager)) {
                // La cita está disponible, se puede reservar
                $entityManager->persist($alquiler);
                $entityManager->flush();

                $this->addFlash('success', 'Cita reservada correctamente.');
            } else {
                // La cita no está disponible, mostrar mensaje de error
                $this->addFlash('error', 'La cita ya ha sido reservada por otra persona.');
            }

            return $this->redirectToRoute('home');
        }

        return $this->render('cita.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function esCitaDisponible(Alquiler $alquiler, EntityManagerInterface $entityManager): bool
    {
        // Obtener fecha y hora del alquiler
        $fecha = $alquiler->getDia();
        $hora = $alquiler->getHora();
        $pista = $alquiler->getIdPista();

        // Realizar consulta para verificar si la cita está disponible
        $citaExistente = $entityManager->getRepository(Alquiler::class)->findOneBy([
            'Dia' => $fecha,
            'Hora' => $hora,
            'id_pista' => $pista,
        ]);

        // La cita está disponible si no se encontró ninguna cita existente para la misma fecha y hora
        return $citaExistente === null;
    }

   
}


