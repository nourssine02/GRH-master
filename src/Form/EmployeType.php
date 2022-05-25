<?php

namespace App\Form;

use App\Entity\Titre;
use App\Entity\Employe;
use App\Entity\Service;
use App\Form\PrimeType;
use App\Entity\Departement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class EmployeType extends AbstractType
{ 
public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('matricule', TextType::class ,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('nom',TextType::class ,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('prenom', TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('sexe', ChoiceType::class, [
            'choices'  => [
                'Femme' => 'femme',
                'Homme' => 'homme',
            ],
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        
        ])
        ->add('adresse' , TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('telephone' , TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('cin' , TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('dateNais' , DateType::class, [
            'widget' => 'single_text',
            'attr' => ['class' => 'js-datepicker' ,
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
        ]])
        ->add('situationFamilial', ChoiceType::class, [
            'choices'  => [
                'Célibataire' => 'Célibataire',
                'Marié' => 'Marié',
                'Divorcé' => 'Divorcé',
                'Veuf' => 'Veuf'
            ],

            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
                'onChange'=> 'yesnoCheck(this)'
            
            ]

        ])
        ->add('nbreEnfants' , IntegerType::class,[
            'required' => false,
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('cnss' ,TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('dateEmbauche' , DateType::class, [
            'widget' => 'single_text',
            'attr' => ['class' => 'js-datepicker'],
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
            
        ])
        ->add('categorie' , NumberType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('echelon' , NumberType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
        ->add('typeContrat' ,ChoiceType::class, [
            'choices'  => [
                'CDI' => 'CDI',
                'CDD' => 'CDD',
                'CTT' => 'CTT',
                'Alternance' => 'alternance'
            ],
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
        ])
        ->add('salaireBase' , NumberType::class ,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
    ->add('prime' ,CollectionType::class,[
            'entry_type' => PrimeType::class,
            'entry_options' => [
                'required' => false,
                'label' => false
            ], 
            'label' => false,
            
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
        ]   
        )
        ->add('typePaie' ,  ChoiceType::class, [
            'choices'  => [
                'Horaire' => 'horaire',
                'Mensuelle' => 'mensuelle',
            ],
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
        ])
        ->add('moyenPaiement' , ChoiceType::class, [
            'choices'  => [
                'Chèque' => 'Chèque',
                'Espece' => 'Espece',
                'Virement' => 'Virement',
            ],
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            'onChange'=> 'chooseOne(this)'
            ]
        ])
        ->add('nomBanque', TextType::class ,[
            'required' => false,
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]])

        ->add('numCompteBanc', TextType::class , [
        'required' => false,
        'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]])
        ->add('departement' , EntityType::class, [
            'class' => Departement::class ,
        'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
    ]])
        ->add('service' , EntityType::class ,
    [ 'class' => Service::class ,
        
        'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
    ]])
        ->add('titre' , EntityType::class , [
            'class' => Titre::class ,
        'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
    ]])
        ->add('email' , TextType::class,[
            'attr' => [
                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',
            
            ]
    
        ] )
       
      
    ;
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Employe::class,
    ]);
}
}
