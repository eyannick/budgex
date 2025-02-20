<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccountController extends AbstractController
{
    // fonction de gestion de la page account
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig');
    }

    // fonction permettant au user de modifier son mot de passe
    #[Route('/account/update-password', name: 'app_update-password')]
    public function updateUserPassword(): Response
    {
        return $this->render('account/update-password.html.twig');
    }

}
