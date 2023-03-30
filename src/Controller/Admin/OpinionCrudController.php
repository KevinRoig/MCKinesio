<?php

namespace App\Controller\Admin;

use App\Entity\Opinion;
use App\Repository\OpinionRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OpinionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Opinion::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Avis client')
            ->setEntityLabelInPlural('Avis clients')
            ->setSearchFields(['clientName', 'description', 'note'])
            ->setDefaultSort(['clientName' => 'DESC'])
        ;
    }

    protected OpinionRepository $opinionRepository;

    public function __construct(OpinionRepository $opinionRepository)
    {
        $this->opinionRepository = $opinionRepository;
    }


    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ->disable(Action::DETAIL, Action::EDIT)
            ->update(Crud::PAGE_INDEX, Action::NEW, fn (Action $action) => $action->setIcon('fa fa-plus')
                ->setLabel('Ajouter des avis clients')
            )

            ->update(Crud::PAGE_INDEX, Action::DELETE, fn (Action $action) => $action->setLabel('Supprimer')
                ->setIcon('fa fa-times')
            )
            ->update(Crud::PAGE_INDEX, Action::EDIT, fn (Action $action) => $action->setLabel('Editer')
                ->setIcon('fa fa-edit')
            )
        ;
    }

   
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('clientName', 'Nom du client');
        yield TextareaField::new('description', 'Description de l\'avis');
        yield ChoiceField::new('note', 'Note')->allowMultipleChoices(false)->setChoices([
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
        ]);
    }
}
