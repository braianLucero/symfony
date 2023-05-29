<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    /**
     * @Route("/", name="standard")
     */
    public function index(): Response
    {
        return $this->render('standard/index.html.twig', [
            'controller_name' => 'braian', 
        ]);
    }

    /**
     * @Route("/pagina2/{nombre}", name="pagina2")
     */

    public function pagina2($nombre)
    {
        return $this->render('standard/pagina2.html.twig', [
            "parametro1" => $nombre
        ]);
    }
}
