<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => "Prénom",
                'constraints' => [
                    new Length([
                        'min' => 2, 
                        'max' => 30
                    ]),
                ],
                'attr' => [
                    'placeholder' => "Prénom",
                    'class' => "form-control form-control-lg w-100"
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => "Nom",
                'constraints' => [
                    new Length([
                        'min' => 2, 
                        'max' => 30
                    ]),
                ],
                'attr' => [
                    'placeholder' => "Nom",
                    'class' => "form-control form-control-lg w-100"
                ]
            ])        
            ->add('email', EmailType::class, [
                'label' => "Email",
                'attr' => [
                    'placeholder' => "Email",
                    'class' => "form-control form-control-lg w-100"
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [
                    new Length([
                        'min' => 8, 
                        'max' => 30
                    ]),
                ],
                'first_options'  => [
                    'label' => 'Entrez votre mot de passe',
                    'attr' => [
                        'placeholder' => "Entrez votre mot de passe",
                        'class' => "form-control form-control-lg w-100"
                    ],
                    'hash_property_path' => 'password'
                ],
                'second_options' => [
                    'label' => 'Confirmez votre mot de passe',
                    'attr' => [
                        'placeholder' => "Confirmez votre mot de passe",
                        'class' => "form-control form-control-lg w-100"
                    ],
                ],
                'mapped' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Inscription",
                'attr' => [
                    'class' => "btn btn-primary"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'constraints' => [
                new UniqueEntity([
                    'entityClass' => User::class, 
                    'fields' => 'email' 
                ])
            ],
            'data_class' => User::class,
        ]);
    }
}
