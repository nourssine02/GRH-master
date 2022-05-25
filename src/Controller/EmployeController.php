<?php

namespace App\Controller;

use App\Entity\Prime;
use App\Entity\Employe;
use App\Form\EmployeType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeController extends AbstractController
{

    /** 
     * @Route("/employes", name="employe_list")
     */
    public function index(ManagerRegistry $doctrine)
    {
        $employes = $doctrine->getRepository(Employe::class)->findAll();

        return $this->render('employe/list.html.twig', [
            'employes' => $employes,
           
        ]);
    }
     
     /**
     * @Route("/employe/new", name="employe_new"  , methods={"POST" ,"GET"}  )
     */
    public function add(Request $request ,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $employe = new Employe();
        $primes = new ArrayCollection();
        foreach ($employe->getPrime() as $p) {
            $primes->add($p);
        }
        $formE = $this->createForm(EmployeType::class , $employe);
        $formE->handleRequest($request);

        if ($formE->isSubmitted() && $formE->isValid()) {

                 foreach ($primes as $p) {
               
                if ($employe->getPrime()->contains($p) === false) {
                    $em->remove($p);
                }
            }

        // on faire le lien entre doctrine et l'objet
        $em->persist($employe);
        $em ->flush();
       // $request->getSession()->getFlashBag()->add();
        $this->addFlash('info','Envoyée avec Succées ');
        return $this->redirectToRoute('employe_list');

        }

        return $this->render('employe/new.html.twig', [
            "employe" => $employe,
            'formE' => $formE->createView()
        ]);
    }

     /**
     * @Route("/employe/update/{id}", name="employe_update" , methods={"POST" ,"GET"}  )
     */

     public function update(Request $request , $id ,ManagerRegistry $doctrine ) : Response   {

       $employe = $doctrine->getRepository(Employe::class)->find($id);
         if (!$employe) {
                throw $this->createNotFoundException(
                    'There are no employers with the following id: ' . $id
                );
        }
        $em = $doctrine->getManager();   

        $formE = $this->createForm(EmployeType::class , $employe);
        $formE->handleRequest($request);

        if ($formE->isSubmitted() && $formE->isValid()) {

                $em->persist($employe);
                $em ->flush();

            $this->addFlash('info','Modifiée avec Succées ');
             
            return $this->redirectToRoute('employe_list');

        }
        return $this->render('employe/update.html.twig', [
           "employe" => $employe,
            'formE' => $formE->createView() 
        ]);

     }

    /**
     * @Route("/employe/delete/{id}", name="employe_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){
        
        $employe = $doctrine->getRepository(Employe::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($employe);
        $em ->flush();



        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('employe_list');



    }


}
