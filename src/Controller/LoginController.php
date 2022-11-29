<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(): Response
    {
        $user = new User();

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'index_link' => $this->generateUrl('app_index'),
            'register_link' => $this->generateUrl('app_register'),
        ]);
    }
}
