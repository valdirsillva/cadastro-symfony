<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="web_usuario_")
 */
class UsuarioController extends AbstractController
{

    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response 
    {
        return $this->render('usuario/erro.html.twig', [
            'fulano' => "Valdir"
        ]);
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
     public function salvar(): Response
     {
         return new Response("implementar  gravacao no banco de dados");
     }
}