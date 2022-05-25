<?php

namespace App\Controller;

use App\Form\GestionSuppType;
use App\Entity\GestionSupplementaire;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionSupplementaireController extends AbstractController
{

    /**
     * @Route("/gestionSupp", name="gestionSupp_list")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $gestionSupps = $doctrine->getRepository(GestionSupplementaire::class)->findAll();

        return $this->render('gestionSupp/list.html.twig', [
            'gestionSupps' => $gestionSupps,
        ]);
    }

      /**
     * @Route("/gestionSupp/new", name="gestionSupp_new")
     */
    public function add(Request $request ,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $gestionSupp = new GestionSupplementaire();
       
        $formG = $this->createForm(GestionSuppType::class, $gestionSupp);
        $formG->handleRequest($request);

        if ($formG->isSubmitted() && $formG->isValid()) {

            $em->persist($gestionSupp);
            $em->flush();
            $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('gestionSupp_list');
        }

        return $this->render('gestionSupp/new.html.twig', [
            "gestionSupp" => $gestionSupp,
            'formG' => $formG->createView()
        ]);
    }

      /**
     * @Route("/gestionSupp/update/{id}", name="gestionSupp_update" , methods={"POST" ,"GET"}  )
     */

     public function update(Request $request , $id ,EntityManagerInterface $em ,ManagerRegistry $doctrine ) : Response   {

       $gestionSupp =$doctrine->getRepository(GestionSupplementaire::class)->find($id);
       //dd($gestionSupp);
         if (!$gestionSupp) {
                throw $this->createNotFoundException(
                    'There are no gestionSupps with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();   

        $formG = $this->createForm(GestionSuppType::class , $gestionSupp);
        $formG->handleRequest($request);
        if ($formG->isSubmitted() && $formG->isValid()) {
       
                $em->persist($gestionSupp);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('gestionSupp_list');

        }
        return $this->render('gestionSupp/update.html.twig', [
           "gestionSupp" => $gestionSupp,
            'formG' => $formG->createView() 
        ]);

     }

    /**
     * @Route("/gestionSupp/delete/{id}", name="gestionSupp_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){
        
        $gestionSupp = $doctrine->getRepository(GestionSupplementaire::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($gestionSupp);
        $em ->flush();
        
        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('gestionSupp_list');



    }
}
