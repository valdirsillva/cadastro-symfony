<?php



namespace App\Controller\Api;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario_")
 */

class UsuarioController 
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse 
    {
        return new JsonResponse(['Implementar lista na api', 404]);
    }
    
    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra(): JsonResponse 
    {
        return new JsonResponse(['implementar cadastro da api', 404]);
    }
}