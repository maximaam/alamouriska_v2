<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(name: 'app_user_')]
final class UserController extends AbstractController
{
    #[Route('/profile', name: 'index')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
