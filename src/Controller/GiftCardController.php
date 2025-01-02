<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GiftCardController extends AbstractController
{
    #[Route('/carte-cadeau', name: 'gift_card')]
    public function show(): Response
    {
        return $this->render('gift_card/index.html.twig');
    }
}
