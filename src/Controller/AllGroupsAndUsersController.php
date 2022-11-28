<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllGroupsAndUsersController extends AbstractController
{
    #[Route('/all', name: 'app_all_groups_and_users')]
    public function index(): Response
    {
        return $this->render('all_groups_and_users/index.html.twig', [
            'controller_name' => 'AllGroupsAndUsersController',
        ]);
    }
}
