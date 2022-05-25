<?php

namespace App\Controller;


use App\Entity\Employe;

use App\Form\EditProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', []);
    }

   /**
     * @Route("/profil/update/{id}", name="profil_update" , methods={"POST" ,"GET"}  )
     */

     public function updateProfil(Request $request , $id ,EntityManagerInterface $em,ManagerRegistry $doctrine ) : Response   {

       $profil = $doctrine->getRepository(Employe::class)->find($id);
        $em = $doctrine->getManager();  
        $form = $this->createForm(EditProfilType::class , $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $em->persist($profil);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('profil');

        }
        return $this->render('profil/update.html.twig', [
           "profil" => $profil,
            'form' => $form->createView() 
        ]);

     }

 












}
