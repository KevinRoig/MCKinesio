<?php

namespace App\Controller;

use App\Repository\OpinionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(OpinionRepository $opinionRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'opinions' => $opinionRepository->findBy([], ['id' => 'DESC'], 10),

        ]);
    }

    #[Route('/cgv', name: 'cgv')]
    public function show(): Response
    {
        return $this->render('home/cgv.html.twig');
    }
}
