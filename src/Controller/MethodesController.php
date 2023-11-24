<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MethodesController extends AbstractController
{
    #[Route('/methodes', name: 'app_methodes')]
    public function index(): Response
    {
        return $this->render('methodes/index.html.twig', [
            'controller_name' => 'MethodesController',
        ]);
    }
}
