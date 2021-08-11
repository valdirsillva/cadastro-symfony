<?php



namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario_")
 */

class UsuarioController extends AbstractController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse 
    {
        // retorna o repositorio da entidade usuario
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);

        // dump($doctrine->pegarTodos());

        return new JsonResponse($doctrine->pegarTodos(), 200);
    }
    
    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra(): JsonResponse 
    {
        return new JsonResponse(['implementar cadastro da api'], 404);
    }
}