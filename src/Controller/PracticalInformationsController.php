<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticalInformationsController extends AbstractController
{
    #[Route('/informations-pratiques', name: 'practical_informations')]
    public function index(): Response
    {
        return $this->render('practical_informations/index.html.twig', [
            'controller_name' => 'PracticalInformationsController',
        ]);
    }
}
