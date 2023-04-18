<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'required' => true,
            'label' => false, 
            'attr' => ['placeholder' => 'Nom']
        ])
        ->add('prenom', TextType::class, [
            'required' => true,
            'label' => false, 
            'attr' => ['placeholder' => 'Prénom']
        ])
        ->add('telephone', TelType::class, [
            'required' => true,
            'label' => false, 
            'attr' => ['placeholder' => 'Téléphone']
        ])
        ->add('email', EmailType::class, [
            'required' => true,
            'label' => false, 
            'attr' => ['placeholder' => 'Email']
        ])
        ->add('message', TextareaType::class, [
            'attr' => ['rows' => 8, 'maxlength' => 2000, 'placeholder' => '2000 caractères maximum'],
            'required' => true,
            'label' => "Votre message :"
        ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
