<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KinesiologieController extends AbstractController
{
    #[Route('/la-kinesiologie', name: 'kinesiologie')]
    public function index(): Response
    {
        return $this->render('kinesiologie/index.html.twig', [
            'controller_name' => 'KinesiologieController',
        ]);
    }
}
