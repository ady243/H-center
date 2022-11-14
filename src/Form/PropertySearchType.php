<?php

namespace App\Form;

use App\Entity\PropertySearch;
use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class PropertySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Price',IntegerType::class,[
                'required'=>false,
                'label'=> false,
                'attr'=>[
                    '|'
                ]
            ])
            ->add('Surface',IntegerType::class,[
                'require'=>false,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Surface'
                ]

            ])
            ->add('DateStart',DateType::class,[
                'require'=>false,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Date Début'
                ]

            ])
            ->add('DateEnd',DateType::class,[
                'require'=>false,
                'label'=>false,
                 'attr'=>[
                    'placeholder'=>'Date Fin'
                ]

            ])
            ->add('TypeBureau',StringType::class,[
                'require'=>false,
                'label'=>false

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PropertySearch::class,
            // 'method'=>'get',
            // 'csrf_protection'=>false,
        ]);
    }
}
