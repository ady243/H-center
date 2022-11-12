<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',  EmailType::class, [
                'label' => 'Votre adresse email*',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Votre prénom*',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Votre nom*',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('birthDate', DateType::class, [
                'label' => 'Votre date de naissance*',
                'attr' => [
                    'class' => 'form-control'
                ],
                'widget' => 'single_text',
//                'html5' => false,
//                'format' => 'dd/MM/yyyy',
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Votre numéro de téléphone*',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Votre adresse*',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut*',
                'attr' => [
                    'class' => 'form-control',
                ],
                'choices' => [
                    'Particulier' => 'particulier',
                    'Professionnel' => 'professionnel',
                ],
            ])

            ->add('siret', TextType::class, [
                'label' => 'SIRET*',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false
            ])
            ->add('companyName', TextType::class, [
                'label' => 'Raison sociale*',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
            ])
            ->add('legalStatus', TextType::class, [
                'label' => 'Statut juridique*',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label' => 'Votre mot de passe*',
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
