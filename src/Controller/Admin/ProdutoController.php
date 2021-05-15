<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProdutoController extends AbstractController
{
    /**
     * @Route("/produto", name="produto")
     */
    public function index(): Response
    {
        return $this->render('produto/index.html.twig', [
            'controller_name' => 'ProdutoController',
        ]);
    }
}
