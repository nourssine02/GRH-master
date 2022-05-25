<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Pointage;
use App\Form\EmployeType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PointageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('entree', TimeType::class ,[
            //      'widget' => 'single_text',
            //     'attr' => ['class' => 'js-datepicker'],
            //      'attr' => [
            //         'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

            //      ],
            //     'required' => false,

            // ])
    
         
            ->add('datePointage', DateType::class ,[
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                  'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],
                'required' => true,

            ])
           ->add('employe' ,EntityType::class , [
                'class' => Employe::class,
                'placeholder' => 'Choisir un employe',
                'choice_label' => function ($employe){
                     return $employe->getNom() . ' ' . $employe->getPrenom();
                 },
               'required' => true,
                'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],
              
               
            ])
 
        ;

            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pointage::class,
        ]);
    }
}
