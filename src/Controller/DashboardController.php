<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Mission;
use App\Entity\Service;
use App\Entity\Departement;
use App\Repository\CongesRepository;
use App\Repository\DatesCongesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function PHPUnit\Framework\countOf;

class DashboardController extends AbstractController
{

    /**
     * @Route("/dashboard", name="dashboard_page")
     */
    public function index(ManagerRegistry $doctrine ,CongesRepository $congesRepository ): Response
    {
        $employes = $doctrine->getRepository(Employe::class)->findAll();
        $nbrEmp = count($employes);

        $missions = $doctrine->getRepository(Mission::class)->findAll();
        $nbrMi = count($missions);


        $departement = $doctrine->getRepository(Departement::class)->findAll();
        $nbrDepart = count($departement);

        $service = $doctrine->getRepository(Service::class)->findAll();
        $nbrServ = count($service);


        /******************************************************/
        // on cherche tous les dates qui imposent par les employes
        $conges = $congesRepository->findAll();

        $employe = [];
        $jours =[];

        foreach ($conges as $conge){
            if ($conge->getStatut() == 'acceptée') {
                $employe [] = $conge->getEmploye()->getNom();
                $jours[] = $conge->getNbreJours();
            }

        }

        return $this->render('dashboard/index.html.twig', [
            'nbrEmp' => $nbrEmp,
            'nbrMi' => $nbrMi,
            'nbrDepart' => $nbrDepart,
            'nbrServ' => $nbrServ,
            'employe' => json_encode($employe),
              'jours' => json_encode($jours),

        ]);



    }


/**************************************************************** */

    //Departements

     /**
     * @Route("/departement", name="departements_list")
     */
    public function showD(ManagerRegistry $doctrine): Response
    {

        $departements = $doctrine->getRepository(Departement::class)->findAll();

        return $this->render('dashboard/departement/list.html.twig', [
           'departements' => $departements
        ]);
    }
      /**
     * @Route("/departement/new", name="departement_new")
     */
    public function newD(Request $request,ManagerRegistry $doctrine): Response
    {

        $departement = new Departement();
        $formD = $this->createFormBuilder($departement)
            ->add('nom', TextType::class ,  [
                    'attr' => [
                        'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                    ]
                ])
            ->getForm();

        $formD->handleRequest($request);

        if ($formD->isSubmitted() && $formD->isValid()) {

            $em = $doctrine->getManager();
            $data = $formD->getData();
            $em->persist($departement);
            $em->flush();
           $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('departements_list');
        }
        return $this->render('dashboard/departement/new.html.twig', [
           'departement' => $departement,
            'formD' => $formD->createView()
        ]);
    }



      /**
     * @Route("/departement/update/{id}", name="departement_update" , methods={"POST" ,"GET"}  )
     */

     public function updateD(Request $request , $id ,EntityManagerInterface $em  ,ManagerRegistry $doctrine) : Response   {

       $departement =$doctrine->getRepository(Departement::class)->find($id);
       //dd($departement);
         if (!$departement) {
                throw $this->createNotFoundException(
                    'There are no departements with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();
        $formD = $this->createFormBuilder($departement)
                    ->add('nom', TextType::class ,  [
                            'attr' => [
                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                            ]
                        ])
                    ->getForm();
        $formD->handleRequest($request);
        if ($formD->isSubmitted() && $formD->isValid()) {
                $data = $formD->getData();
                $em->persist($departement);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');

            return $this->redirectToRoute('departements_list');

        }
        return $this->render('dashboard/departement/update.html.twig', [
           "departement" => $departement,
            'formD' => $formD->createView()
        ]);

     }

    /**
     * @Route("/departement/delete/{id}", name="departement_delete"  )
     */
    public function deleteD($id ,ManagerRegistry $doctrine){

        $departement = $doctrine->getRepository(Departement::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($departement);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('departements_list');



    }
    /********************************************************** */

    //Services


     /**
     * @Route("/service", name="services_list")
     */
    public function showS(ManagerRegistry $doctrine): Response
    {

        $services = $doctrine->getRepository(Service::class)->findAll();

        return $this->render('dashboard/service/list.html.twig', [
           'services' => $services
        ]);
    }

  /**
     * @Route("/service/new", name="service_new")
     */
    public function newS(Request $request,ManagerRegistry $doctrine): Response
    {

        $service = new Service();
        $formS = $this->createFormBuilder($service)
            ->add('nom', TextType::class ,  [
                    'attr' => [
                        'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                    ]
                ])
            ->getForm();

        $formS->handleRequest($request);

        if ($formS->isSubmitted() && $formS->isValid()) {

            $em = $doctrine->getManager();
            $data = $formS->getData();
            $em->persist($service);
            $em->flush();
           $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('services_list');
        }
        return $this->render('dashboard/service/new.html.twig', [
           'service' => $service,
            'formS' => $formS->createView()
        ]);
    }



      /**
     * @Route("/service/update/{id}", name="service_update" , methods={"POST" ,"GET"}  )
     */

     public function updateS(Request $request , $id ,EntityManagerInterface $em ,ManagerRegistry $doctrine ) : Response   {

       $service =$doctrine->getRepository(Service::class)->find($id);
       //dd($service);
         if (!$service) {
                throw $this->createNotFoundException(
                    'There are no services with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();
        $formS = $this->createFormBuilder($service)
                    ->add('nom', TextType::class ,  [
                            'attr' => [
                                'class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input',

                            ]
                        ])
                    ->getForm();
        $formS->handleRequest($request);
        if ($formS->isSubmitted() && $formS->isValid()) {
                $data = $formS->getData();
                $em->persist($service);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');

            return $this->redirectToRoute('services_list');

        }
        return $this->render('dashboard/service/update.html.twig', [
           "service" => $service,
            'formS' => $formS->createView()
        ]);

     }

    /**
     * @Route("/service/delete/{id}", name="service_delete"  )
     */
    public function deleteS($id ,ManagerRegistry $doctrine){

        $service = $doctrine->getRepository(Service::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($service);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('services_list');



    }





}
