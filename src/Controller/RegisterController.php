<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterController extends AbstractController
{
    // fonction permettant de gérer l'inscription d'un user sur le site
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        // instanciation d'un nouvel utilisateur
        $user = new User();
        
        // mise en variable de la création du formulaire avec un lien vers la class User afin de lier les informations à cette class  
        $form = $this->createForm(RegisterUserType::class, $user);

        // récupération des infomrations inscrites dans le formulaire et mappage des informations attendues
        $form->handleRequest($request);
        
        // contrôle si le formulaire est valide et soumis par l'utilisateur
        if ($form->isSubmitted() && $form->isValid()) {
            //dd($form->getData()); 
            // permet de figer les données avant de les envoyer en db. Passage de l'objet User en paramètres qui contient le résultat du formulaire
            $entityManager->persist($user);
            // enregistrement des données dans la db
            $entityManager->flush();
        }

        return $this->render('register/index.html.twig', [
            'registerForm' => $form->createView()
        ]);
    }
}
