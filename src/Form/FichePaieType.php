<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\FichePaie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FichePaieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
        
            ->add('dateJour', DateType::class ,[
                'widget' => 'single_text',
                 'label' => 'Date de jour ',
                'attr' => ['class' => 'js-datepicker'],
                  'attr' => [
                    'class' => 'block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],
                'required' => true,

            ])
            ->add('datePaiement', DateType::class ,[
             'widget' => 'single_text',
                'label' => 'Mois de paiement ',
                 'format' => 'MM/yyyy',
                'html5' => false,
                  'attr' => [
                    'class' => 'block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                'placeholder' => 'Enter date (exp 03/2022)',

                ],
                'required' => true,
 
            ])

            ->add('employe' ,EntityType::class , [
                'class' => Employe::class,
                'choice_label' => 'matricule', 
                'label' => 'Matricule',           
                'placeholder' => 'Choisir une matricule',
                'required' => true,
                'attr' => [
                    'class' => 'block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ]
                         
            ])

             ->add('submit', SubmitType::class,[
                 'label' => false,
                 'attr' => [
                     'class' => 'block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                 ]
             ] )

                   
       
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FichePaie::class,
        ]);
    }

}

/*******
      
 */