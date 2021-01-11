<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use App\Repository\CategoriesRepository;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        
        $association = AssociationField::new('categories')
            ->setFormTypeOption(
                'query_builder', function (CategoriesRepository  $CategoriesRepository){
                    return $CategoriesRepository->createQueryBuilder('u')
                        ->andWhere('u.active = 1');
                }
            );
        return [
            //IdField::new('id'),
            TextField::new('code'),
            TextField::new('name'),
            TextEditorField::new('description'),
            TextField::new('brand'),
            AssociationField::new('categories')->setRequired(true),
            $association,
            MoneyField::new('price')->setCurrency('COP'),
        ];
    }
    
    
}
