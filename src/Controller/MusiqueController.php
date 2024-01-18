<?php

namespace App\Controller;

use App\Repository\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MusiqueRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;

class MusiqueController extends AbstractController
{
    #[Route('/musique', name: 'musique.index')]
    public function index(MusiqueRepository $musiqueRepository, CommandeRepository $commandeRepository,Request $request): Response
    {
        $lesMusiques = $musiqueRepository->findAll();
        $test = $commandeRepository->test($this->getUser()->getUserIdentifier());
        return $this->render('musique/index.html.twig', [
            'lesMusiques' => $lesMusiques,
            'test' => $test]);
    }
}
