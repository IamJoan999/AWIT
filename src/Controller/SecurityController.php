<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\Client;
use App\Repository\ClientRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Security\Authenticator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\User;
use Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Security\UserProvider;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    #[Route(path: '/register', name: 'app_register')]
    public function register(Request $request, ManagerRegistry $entityManager, AuthenticationUtils $authenticationUtils, ClientRepository $clientRepository): Response
    {


        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if($request->request->get('username')) {
            $client = new Client();

            $username = $request->request->get('username');
            $password = $request->request->get('password');

            $client->setLogincli($username);
            $client->setMdpcli($password);

            try {
                $clientRepository->save($client, true);
            } catch(Exception) {
                return $this->render('security/register.html.twig', ['last_username'=> $lastUsername, 'error'=> $error, 'message'=>'Ce login est déjà pris']);
            }

            if($clientRepository->findOneBy(['logincli'=>$username]) != null) {
                return new RedirectResponse('login', 302, ['last_username'=>$lastUsername, 'error'=>$error, 'message'=>'Veuillez vous logger']);
            } else {
                return $this->render('security/register.html.twig', ['last_username' => $lastUsername, 'error'=> $error, 'message'=> 'Veuillez recommencer']);
            }
        }
        return $this->render('security/register.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'message'=>'']);
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}
