<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\GestionSupplementaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GestionSuppType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ]

            ])
            ->add('jourFerie' ,ChoiceType::class ,[
                 'choices' => [
                     'Oui' => true,
                     'Non' => false
                 ],
                'multiple'=>false,
                'expanded'=>true,
                'label' => 'Absent',
                'required' => true,
                 'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray',
                 ],

                 
            ])
            ->add('nbreHeurSupp', TimeType::class,[
                 'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                 'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                 ],
                'required' => false,

            ])
            ->add('montant', TextType::class,
                [
                    'attr' => [
                        'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                    ]
                ]
            )            
            ->add('employe',EntityType::class, [
                'class' => Employe::class,
                 'choice_label' => function ($employe){
                     return $employe->getNom() . ' ' . $employe->getPrenom();
                 },
                 'placeholder' => 'choisir un employe',
                'expanded'  => false,
                'multiple'  => false,

                'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],

            ])        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GestionSupplementaire::class,
        ]);
    }
}
