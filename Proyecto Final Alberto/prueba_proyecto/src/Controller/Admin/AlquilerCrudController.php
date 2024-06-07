<?php

namespace App\Controller\Admin;

use App\Entity\Alquiler;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;


class AlquilerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Alquiler::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            DateField::new('dia'),
            TimeField::new('hora'),
            AssociationField::new('id_user'),
            AssociationField::new('id_pista'),
        ];
    }
    
}
