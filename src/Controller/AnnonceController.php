<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonces", name="annonces_list")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
       $annonces = $doctrine->getRepository(Annonce::class)->findAll();

        return $this->render('annonce/list.html.twig', [
            'annonces' => $annonces
        ]);
    }
      /**
     * @Route("/annonce/new", name="annonce_new")
     */
    public function add(Request $request,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $annonce = new Annonce();
       
        $formA = $this->createForm(AnnonceType::class, $annonce);
        $formA->handleRequest($request);

        if ($formA->isSubmitted() && $formA->isValid()) {

            $em->persist($annonce);
            $em->flush();
            $this->addFlash('info', 'Ajoutée avec Succées ');
            return $this->redirectToRoute('annonces_list');
        }

        return $this->render('annonce/new.html.twig', [
            "annonce" => $annonce,
            'formA' => $formA->createView()
        ]);
    }

      /**
     * @Route("/annonce/update/{id}", name="annonce_update" , methods={"POST" ,"GET"}  )
     */

     public function update(Request $request , $id ,EntityManagerInterface $em,ManagerRegistry $doctrine  ) : Response   {

       $annonce =$doctrine->getRepository(Annonce::class)->find($id);
       //dd($annonce);
         if (!$annonce) {
                throw $this->createNotFoundException(
                    'There are no annonces with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();   

        $formA = $this->createForm(AnnonceType::class , $annonce);
        $formA->handleRequest($request);
        if ($formA->isSubmitted() && $formA->isValid()) {
       
                $em->persist($annonce);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('annonces_list');

        }
        return $this->render('annonce/update.html.twig', [
           "annonce" => $annonce,
            'formA' => $formA->createView() 
        ]);

     }

    /**
     * @Route("/annonce/delete/{id}", name="annonce_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){
        
        $annonce = $doctrine->getRepository(Annonce::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($annonce);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('annonces_list');



    }

}
