<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Pointage;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PointageController extends AbstractController
{

    /**
     * @Route("/pointage", name="pointages_list")
     */
    public function list(ManagerRegistry $doctrine): Response
    {
        $employes = $doctrine->getRepository(Employe::class)->findAll();
        $pointages =$doctrine->getRepository(Pointage::class)->findAll();

        $dat_j=date("Y-m",time())."-01";

        $nbj_m=date("t",strtotime($dat_j));
        $aujourdhui=date("d",time());

        for ($i=1; $i < $nbj_m+1; $i++) {
            if (strlen($i) == 1) {
                $i = '0'.$i;
            }
            $sommeJour [] = $i;
        }

        return $this->render('pointage/show.html.twig', [
            'employes' => $employes,
            'pointages' => $pointages,
            'sommeJour' => $sommeJour,
            'aujourdhui' => $aujourdhui,




        ]);
    }


     /**
     * @Route("/pointage/{id}", name="pointages_update")
     */
    public function update(ManagerRegistry $doctrine,$id )
    {

       $employe = $doctrine->getRepository(Employe::class)->find($id);
        $pointages = $doctrine->getRepository(Pointage::class)->findAll();

        $dat_j = date("Y-m", time()) . "-01";

        $nbj_m = date("t", strtotime($dat_j));
        $aujourdhui = date("d", time());
      //  $total = 1;
        $liste = [];


        for ($i = 1; $i < $nbj_m + 1; $i++) {
            if (strlen($i) == 1) {
                $i = '0' . $i;
            }
            $sommeJour [] = $i;
        }

        $em = $doctrine->getManager();
        //$pointage = new Pointage();

        foreach ($employe->getPointages() as $pointage) {
               $listeJ = $pointage->getListeJours();
            if (isset($_POST['submit'])) {
                if (!empty($_POST[$id])) {
                    foreach ($_POST[$id] as $value) {
                       // $liste[] = $value;
                        if (!(in_array($value, $liste))) {
                            $liste[] = $value;
                        }

                    }

                }

                $pointage->setEmploye($employe);
                $pointage->setListeJours($liste);
                $total = count($liste);
                $pointage->setTotal($total);
                $pointage->setMois($dat_j);
                // dd($pointage);
                    $em->persist($pointage);
                    $em->flush();
                    return $this->redirectToRoute('pointages_list');




            }


        }


    }


}


       