<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DreamMachineController extends AbstractController
{
    #[Route('/dream-machine', name: 'dream-machine')]
    public function show(): Response
    {
        return $this->render('dream_machine/index.html.twig');
    }
}
