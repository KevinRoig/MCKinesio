<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $contactFormData = $form->getData();

            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('kevinroig@hotmail.com')
                ->subject('Vous avez reçu une demande d\'informations')
                ->text('Envoyé par : ' . $contactFormData['nom'] .' ' . $contactFormData['prenom'] .PHP_EOL .
                    'Adresse mail :' .  $contactFormData['email'] . PHP_EOL .
                    'Téléphone : ' . $contactFormData['telephone'] . PHP_EOL . 
                    'Message du client : ' . $contactFormData['message']);
                    $mailer->send($message);
                    $this->addFlash('success', 'Votre message a bien été envoyé.');

                    return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
