<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TiersController extends AbstractController
{
    #[Route('/tiers', name: 'app_tiers')]
    public function index(): Response
    {
        return $this->render('tiers/index.html.twig', [
            'controller_name' => 'TiersController',
        ]);
    }
}
