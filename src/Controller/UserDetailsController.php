<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserDetailsController extends AbstractController
{
    #[Route('/user/details', name: 'app_user_details')]
    public function index(): Response
    {
        return $this->render('user_details/index.html.twig', [
            'controller_name' => 'UserDetailsController',
        ]);
    }
}
