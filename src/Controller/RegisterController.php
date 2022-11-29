<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use DateTimeImmutable;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(): Response
    {
        $user = new User();
        $user->setEmail("blabla@mail.com");
        $user->setFirstname("Karim");
        $user->setLastname("Benzema");
        $user->setCreatedAt(new DateTimeImmutable());
        $user->setUpdatedAt($user->getCreatedAt());

        $form = $this->createForm(UserType::class, $user);

        
        return $this->render('register/index.html.twig', [
            'controller_name' => 'RegisterController',
            'index_link' => $this->generateUrl('app_index'),
            'login_link' => $this->generateUrl('app_login'),
            'form' => $form->createView(),
        ]);
    }
}
