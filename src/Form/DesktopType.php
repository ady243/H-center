<?php

namespace App\Form;

use App\Entity\Desktop;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DesktopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du bureau',
                'attr' => [
                    'placeholder' => 'Nom du bureau',
                    'class' => 'form-control',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de bureau',
                'choices' => [
                    'Bureau' => 'Bureau',
                    'Salle de réunion' => 'Salle de réunion',
                    'Salle de conférence' => 'Salle de conférence',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('surface', TextType::class, [
                'label' => 'Surface du bureau',
                'attr' => [
                    'placeholder' => 'Surface du bureau',
                    'class' => 'form-control',
                ],
            ])
            ->add('capacity', TextType::class, [
                'label' => 'Capacité du bureau',
                'attr' => [
                    'placeholder' => 'Capacité du bureau',
                    'class' => 'form-control',
                ],
            ])
            ->add('price', TextType::class, [
                'label' => 'Prix du bureau',
                'attr' => [
                    'placeholder' => 'Prix du bureau',
                    'class' => 'form-control',
                ],
            ])
            ->add('dateStart', DateType::class, [
                'label' => 'Date de début de disponibilité',
                'attr' => [
                    'placeholder' => 'Date de début de disponibilité',
                    'class' => 'form-control',
                ],
                'widget' => 'single_text',
            ])
            ->add('dateEnd', DateType::class, [
                'label' => 'Date de fin de disponibilité',
                'attr' => [
                    'placeholder' => 'Date de fin de disponibilité',
                    'class' => 'form-control',
                ],
                'widget' => 'single_text',
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du bureau',
                'attr' => [
                    'placeholder' => 'Image du bureau',
                    'class' => 'form-control',
                ],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Desktop::class,
        ]);
    }
}
