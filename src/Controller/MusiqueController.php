<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MusiqueRepository;
use Symfony\Component\HttpFoundation\Request;

class MusiqueController extends AbstractController
{
    #[Route('/musique', name: 'musique.index')]
    public function index(MusiqueRepository $musiqueRepository, Request $request): Response
    {
        $lesMusiques = $musiqueRepository->findAll();
        return $this->render('musique/index.html.twig', [
            'lesMusiques' => $lesMusiques]);
    }
}
