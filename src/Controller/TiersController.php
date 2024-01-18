<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Abonnement;
use App\Repository\AbonnementRepository;
use Symfony\Component\HttpFoundation\Request;

class TiersController extends AbstractController
{
    #[Route('/tiers', name: 'tiers.index')]
    public function index(AbonnementRepository $abonnementRepository, Request $request): Response
    {
        $lesTiers = $abonnementRepository->findAll();
        return $this->render('tiers/index.html.twig', [
            'lesTiers' => $lesTiers
        ]);
    }
}
