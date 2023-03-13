<?php

namespace App\Controller\Admin;

use App\Entity\PhotosSejours;
use EasyCorp\Bundle\EasyAdminBundle\Config\Option\TextAlign;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotosSejoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PhotosSejours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('sejour_id'),
            TextareaField::new('description'),
            TextField::new("imageFile")->setFormType(VichImageType::class)->hideOnIndex(),
            ImageField::new("imageName")->hideWhenCreating()
            ->setBasePath("public/images/photos_sejours")
            ->setUploadDir("public/images/photos_sejours"),
        ];
    }
    
}
