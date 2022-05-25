<?php

namespace App\Controller;

use App\Entity\Avance;
use App\Form\AvanceType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvanceController extends AbstractController
{
    /**
     * @Route("/avance", name="avance_list")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $avances = $doctrine->getRepository(Avance::class)->findAll();

        return $this->render('avance/list.html.twig', [
            'avances' => $avances
        ]);
    }

      /**
     * @Route("/avance/new", name="avance_new")
     */
    public function add(Request $request,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $avance = new Avance();
       
        $formA = $this->createForm(AvanceType::class, $avance);
        $formA->handleRequest($request);

        if ($formA->isSubmitted() && $formA->isValid()) {

            $em->persist($avance);
            $em->flush();
            $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('avance_list');
        }

        return $this->render('avance/new.html.twig', [
            "avance" => $avance,
            'formA' => $formA->createView()
        ]);
    }

      /**
     * @Route("/avance/update/{id}", name="avance_update" , methods={"POST" ,"GET"}  )
     */

     public function update(Request $request , $id ,EntityManagerInterface $em,ManagerRegistry $doctrine  ) : Response   {

       $avance =$doctrine->getRepository(Avance::class)->find($id);
       //dd($avance);
         if (!$avance) {
                throw $this->createNotFoundException(
                    'There are no avances with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();   

        $formA = $this->createForm(AvanceType::class , $avance);
        $formA->handleRequest($request);
        if ($formA->isSubmitted() && $formA->isValid()) {
       
                $em->persist($avance);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('avance_list');

        }
        return $this->render('avance/update.html.twig', [
           "avance" => $avance,
            'formA' => $formA->createView() 
        ]);

     }

    /**
     * @Route("/avance/delete/{id}", name="avance_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){
        
        $avance = $doctrine->getRepository(Avance::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($avance);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('avance_list');



    }

}
