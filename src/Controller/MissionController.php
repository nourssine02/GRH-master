<?php

namespace App\Controller;

use App\Entity\Mission;
use App\Form\MissionType;
use App\Repository\MissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MissionController extends AbstractController
{

    /**
     * @Route("/mission", name="mission_list")
     */
    public function index(ManagerRegistry $doctrine )
    {
        $missions = $doctrine->getRepository(Mission::class)->findAll();


        return $this->render('mission/list.html.twig', [
            'missions' => $missions,
        ]);
    }


    /**
     * @Route("/mission/new", name="mission_new")
     */
    public function add(Request $request ,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $mission = new Mission();
       
        $formM = $this->createForm(MissionType::class, $mission);
        $formM->handleRequest($request);

        if ($formM->isSubmitted() && $formM->isValid()) {
            $em->persist($mission);
            $em->flush();
            $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('mission_list');
        }

        return $this->render('mission/new.html.twig', [
            "mission" => $mission,
            'formM' => $formM->createView()
        ]);
    }


      /**
     * @Route("/mission/update/{id}", name="mission_update" , methods={"POST" ,"GET"}  )
     */

     public function update(Request $request , $id ,EntityManagerInterface $em ,ManagerRegistry $doctrine ) : Response   {

       $mission =$doctrine->getRepository(Mission::class)->find($id);
       //dd($mission);
         if (!$mission) {
                throw $this->createNotFoundException(
                    'There are no missions with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();   

        $formM = $this->createForm(MissionType::class , $mission);
        $formM->handleRequest($request);
        if ($formM->isSubmitted() && $formM->isValid()) {
       
                $em->persist($mission);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('mission_list');

        }
        return $this->render('mission/update.html.twig', [
           "mission" => $mission,
            'formM' => $formM->createView() 
        ]);

     }

    /**
     * @Route("/mission/delete/{id}", name="mission_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){
        
        $mission = $doctrine->getRepository(Mission::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($mission);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('mission_list');



    }


      /**
     * @Route("/mission/{id}", name="mission")
     */
    public function ajax( $id ,ManagerRegistry $doctrine ): Response
    {
        $mission =$doctrine->getRepository(Mission::class)->find($id);
        $missions = $doctrine->getRepository(Mission::class)->findAll();

        $valid= false;
        $em = $doctrine->getManager();   
        // $mission = $request->get('id');
        $date=  new \DateTime('now');
        $day = $date->format('d');
        $month = $date->format('m');
        $year = $date->format('Y');
 
        $dateFin = $day.'/'.$month.'/'.$year;
        $mission->setDateFin($dateFin);
       $dateFinPrevue= $mission->getDatefinPrevue();
        if ($dateFinPrevue >=  $dateFin){
            $valid = true;
        }
        else{
            $valid = false;
        }
        //dd($mission);
        $em->persist($mission);
        $em->flush();

        

        return $this->render('mission/ajax.html.twig', [
            'missions' => $missions,
            'mission' => $mission,
            'valid' => $valid
        ]);
    }

   


}