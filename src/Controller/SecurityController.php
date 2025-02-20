<?php

// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends AbstractController
{
    // gestion de la deconnexion de l'utilisateur
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(): never
    {
        // Ce contrôleur ne sera jamais exécuté directement.
        throw new \Exception('Ne pas oublier d’activer le logout dans security.yaml');
    }
}
