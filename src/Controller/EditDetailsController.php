<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditDetailsController extends AbstractController
{
    #[Route('/edit/details', name: 'app_edit_details')]
    public function index(): Response
    {
        return $this->render('edit_details/index.html.twig', [
            'controller_name' => 'EditDetailsController',
        ]);
    }
}
