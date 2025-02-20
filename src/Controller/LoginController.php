<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginController extends AbstractController
{
    // fonction permettant de gérer la connexion du user
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // récupération de l'erreur de login si il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();

        // récupération du dernier email entré par le user
        $lastEmail = $authenticationUtils->getLastUsername();

        // renvoi des information liées à l'erreur de connexion si il y en a une ainsi que l'email du user pour éviter qu'il ne le rentre à nouveau
        return $this->render('login/index.html.twig', [
            'error' => $error,
            'last_email' => $lastEmail
        ]);
    } 

}