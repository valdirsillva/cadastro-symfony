<?php



namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function cadastra(Request $request): Response
    {
        $data = $request->request->all();
        
        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();   

        if ( $doctrine->contains($usuario) ) {

            return  new JsonResponse("ok", 200);

        } else {
           return  new JsonResponse("error", 404);
        }        
    }
}