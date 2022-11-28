<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddToGroupController extends AbstractController
{
    #[Route('/add/to/group', name: 'app_add_to_group')]
    public function index(): Response
    {
        return $this->render('add_to_group/index.html.twig', [
            'controller_name' => 'AddToGroupController',
        ]);
    }
}
