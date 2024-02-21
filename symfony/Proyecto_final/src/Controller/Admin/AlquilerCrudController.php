<?php

namespace App\Controller\Admin;

use App\Entity\Alquiler;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


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
            TextField::new('dia'),
            IntegerField::new('hora'),
            AssociationField::new('id_usuario'),
            AssociationField::new('id_pista'),
        ];
    }
    
}
