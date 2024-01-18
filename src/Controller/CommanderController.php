<?php

namespace App\Controller;

use App\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CommandeRepository;
use App\Repository\ClientRepository;
use App\Repository\AbonnementRepository;
use App\Entity\Abonnement;

class CommanderController extends AbstractController
{
    #[Route('/commander/{id}', name: 'commander.index')]
    public function index(Request $request, CommandeRepository $commandeRepository, ClientRepository $clientRepository, AbonnementRepository $abonnementRepository, $id) : Response
    {
        if ($request->request->get('valider')) { 
            $client = $clientRepository->find($this->getUser()->getUserIdentifier());
            $laCommande = new Commande();
            $laCommande->setLogincli($client);
            $laCommande->setDatecre(new \DateTime());
            $laCommande->setDatedebut(new \DateTime());
            $dateFin = new \DateTime();
            $dateFin->modify("+1 month");
            $laCommande->setDatefin($dateFin);
            $abo = $abonnementRepository->find($id);
            $laCommande->setIdabo($abo);

            $commandeRepository->save($laCommande, true);

            return new RedirectResponse('/', 302, []);
        }
        $abo = $abonnementRepository->find($id);
        return $this->render('commander/index.html.twig', ['tier' => $abo]);
    }
}
