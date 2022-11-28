<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllGroupsController extends AbstractController
{
    #[Route('/all/groups', name: 'app_all_groups')]
    public function index(): Response
    {
        return $this->render('all_groups/index.html.twig', [
            'controller_name' => 'AllGroupsController',
        ]);
    }
}
