<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
      
                 ->add('name',EntityType::class, [
                'class' => Employe::class,
                 'choice_label' => function ($employe){
                     return $employe->getNom() . ' ' . $employe->getPrenom();
                 },
                'expanded'  => false,
                'multiple'  => false,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'username',
                    'class' => 'login__input login__field',
                    'placeholder' => 'Nom d utilisateur' 
                ]
            ])

   
            ->add('email' ,TextType::class , [
            'label' => false,
            'attr' => [
                'autocomplete' => 'email',
                'class' => 'login__input login__field',
                'placeholder' => 'Email' 
                ]
            ] )
   
            ->add('plainPassword', PasswordType::class, [
                'label' => false,
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password' ,
                    'class' => 'login__input login__field','placeholder' => 'Mot de passe' ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
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
