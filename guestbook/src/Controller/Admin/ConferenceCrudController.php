<?php

namespace App\Controller\Admin;

use App\Entity\Conference;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConferenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conference::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield TextField::new('city');
        yield TextField::new('year')->setMaxLength(4);
        yield TextField::new('slug')->hideOnForm();
        yield BooleanField::new('isInternational');
    }
}
