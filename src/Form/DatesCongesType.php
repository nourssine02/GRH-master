<?php

namespace App\Form;

use App\Entity\DatesConges;
use App\Entity\Employe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatesCongesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('start' , DateType::class ,[
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],
            ])
            ->add('end' , DateType::class ,[
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'attr' => [
                    'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                ],
            ])
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

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DatesConges::class,
        ]);
    }
}
