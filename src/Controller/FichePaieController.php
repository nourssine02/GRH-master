<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Employe;
use App\Entity\FichePaie;
use App\Form\EmployeType;
use App\Form\FichePaieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;

class FichePaieController extends AbstractController
{
    /**
     * @Route("/fichePaie", name="fiche_paie")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $fiches = $doctrine->getRepository(FichePaie::class)->findAll();

        return $this->render('fiche_paie/list.html.twig', [
            'fiches' => $fiches

        ]);
    }
    /**
     * @Route("/fichePaie/new", name="fiche_paie_new")
     *
     */
    public function add(Request $request ,ManagerRegistry $doctrine)
    {
        $fiches = $doctrine->getRepository(FichePaie::class)->findAll();
        $em = $doctrine->getManager();
        $fiche = new FichePaie();
        $formF = $this->createForm(FichePaieType::class, $fiche);
        $formF->handleRequest($request);
       
         $info =[];
         $totalBrut = 0;
         $cnss = 0;
         $imposable = 0;
         $DFraisProf = 0 ;
         $DFamiliale = 0 ;
         $IRPP = 0 ;
         $nbjTrav = 0 ;
         $nbjAbs = 0 ;
         $nbjCong = 0 ;
         $sommeAv = 0 ;
         $contribSocialSolid = 0;
         $salaireNet = 0;
         $NetApayer = 0;
        $check = false;
        $calculAbs= 0;


        if ( $formF->isSubmitted() && $formF->isValid()) {


            $info[] = [
                'nom' => $fiche->getEmploye()->getNom(),
                'prenom' => $fiche->getEmploye()->getPrenom(),
                'adresse' => $fiche->getEmploye()->getAdresse(),
                'categorie' => $fiche->getEmploye()->getCategorie(),
                'echelon' => $fiche->getEmploye()->getEchelon(),
                'departement' => $fiche->getEmploye()->getDepartement(),
                'service' => $fiche->getEmploye()->getService(),
                'salaireBase' => $fiche->getEmploye()->getSalaireBase(),
                'situationFamilial' => $fiche->getEmploye()->getSituationFamilial(),
                'nbreEnfants' => $fiche->getEmploye()->getNbreEnfants(),
                'cin' => $fiche->getEmploye()->getCin(),
                'cnss' => $fiche->getEmploye()->getCnss(),
                'prime' => $fiche->getEmploye()->getPrime(),
                'HeurSupp' => $fiche->getEmploye()->getGestionSupplementaires(),
                'nbjConges' => $fiche->getEmploye()->getConges(),
                'nbjAbsences' => $fiche->getEmploye()->getPointages(),
                'avances' => $fiche->getEmploye()->getAvances(),

            ];

            $primes = $fiche->getEmploye()->getPrime();
            $outputPrimes = array();
            foreach ($primes as $p) {
                $outputPrimes[] = $p->getMontant();
            }

            $sommeP = array_sum($outputPrimes);
            /********************************* */
            $HeurSupp = $fiche->getEmploye()->getGestionSupplementaires();
            $outputHeurSupp = array();
            foreach ($HeurSupp as $h) {
                $outputHeurSupp[] = $h->getMontant();
            }
            $sommeH = array_sum($outputHeurSupp);
            /********************** */
            $dateRecherche = $fiche->getDatePaiement()->format('Y-m');
            /************************ */
            $nbjConges = $fiche->getEmploye()->getConges();
            foreach ($nbjConges as $nbC) {
                $dateStartConges = $nbC->getStart()->format('Y-m');
                $statut = $nbC->getStatut();
                if ($dateRecherche === $dateStartConges and $statut == 'acceptée') {
                    $nbjCong += $nbC->getNbreJours();

                } else {
                    $nbjCong = 0;
                }
            }
            /************************************************** */

            $nbjAbsences = $fiche->getEmploye()->getPointages();
            foreach ($nbjAbsences as $a) {
                $Abs = $a->getTotal();
                $datePointage = $a->getDatePointage()->format('Y-m');
                if ($dateRecherche === $datePointage and $Abs) {

                    $nbjAbs = 26 - $Abs;
                    $check = true;
                }
                else{
                    $check = false;

                }


            }


            /**************** */
            $salaire = $fiche->getEmploye()->getSalaireBase();

            $nbjTrav = 26 - $nbjAbs - $nbjCong;

            $totalAbs = $nbjAbs - $nbjCong;
            $tauxAbsences= ($totalAbs * 7 / 182) * 100;

            $calculAbs = $tauxAbsences / 100 * $salaire;

            $salaireBase = $salaire - $calculAbs ;
            /******************************** */

            $totalBrut = $salaireBase + $sommeP + $sommeH;
            $cnss = $totalBrut * 9.18 / 100;
            $imposable = $totalBrut - $cnss;
            /*********************** */


            $DFraisProf = ($imposable * 12 * 10) / 100;

            if ($DFraisProf > 2000) {
                $DFraisProf = 2000;
            } else {
                $DFraisProf = ($imposable * 12 * 10) / 100;
            }

            /************************************************** */
            $avances = $fiche->getEmploye()->getAvances();
            $outputAvances = array();
            foreach ($avances as $av) {
                $dateAvance = $av->getDateAvance()->format('Y-m');
                if ($dateRecherche === $dateAvance) {

                    $outputAvances[] = $av->getMontant();
                } else {
                    $outputAvances[] = 0;
                }
            }

            $sommeAv = array_sum($outputAvances);

            /********************************* */

            $situationFamilial = $fiche->getEmploye()->getSituationFamilial();
            $nbreEnfants = $fiche->getEmploye()->getNbreEnfants();
            if ($situationFamilial == 'Célibataire') {
                $DFamiliale = 0.000;
            } elseif ($situationFamilial == 'Marié' and $nbreEnfants == 0) {
                $DFamiliale = 150.000;
            } elseif ($nbreEnfants == 1) {
                $DFamiliale = 240.000;
            } elseif ($nbreEnfants == 2) {
                $DFamiliale = 315.000;
            } elseif ($nbreEnfants == 3) {
                $DFamiliale = 375.000;
            } elseif ($nbreEnfants == 4) {
                $DFamiliale = 420.000;
            }
            /********************* */

            $IRPP = ($imposable * 12) - $DFraisProf - $DFamiliale;
            if ($IRPP > 50000) {
                $IRPP = (((($IRPP - 50000) * 35) / 100) + 13100) / 12;
            } elseif ($IRPP > 30000) {
                $IRPP = (((($IRPP - 30000) * 32) / 100) + 6700) / 12;

            } elseif ($IRPP > 20000) {
                $IRPP = (((($IRPP - 20000) * 28) / 100) + 3900) / 12;

            } elseif ($IRPP > 5000) {
                $IRPP = (((($IRPP - 5000) * 26) / 100)) / 12;

            } else {
                $IRPP = 0;
            }

            /*************************** */
            $contribSocialSolid = ($imposable * 0.9) / 100;
            /**************************** */
            $salaireNet = $imposable - $IRPP - (($imposable * 0.9) / 100) ;

            $NetApayer = $salaireNet - $sommeAv ;
            /***************************** */
            $fiche->setSalaireBrut($totalBrut);
            $fiche->setRetenueCnss($cnss);
            $fiche->setSalaireImposable($imposable);
            $fiche->setContributionSocialeSolidaire($contribSocialSolid);
            $fiche->setSalaireNet($salaireNet);
            $fiche->setNetAPayer($NetApayer);
            $fiche->setIRPP($IRPP);
            $fiche->setDeductionFraisProf($DFraisProf);
            $fiche->setDeductionFamiliale($DFamiliale);
            $fiche->setNbjTrav($nbjTrav);
            $fiche->setNbjAbs($nbjAbs);
            $fiche->setNbjConges($nbjCong);
            $fiche->setAvances($sommeAv);
            /***************************** */
            if ($formF->getClickedButton() === $formF->get('submit')) {
                //dd($fiche);
                $em->persist($fiche);
                $em->flush();
                $this->addFlash('info', 'Ajoutée avec Succées ');
                return $this->redirectToRoute('fiche_paie');
            }
        }
        return $this->render('fiche_paie/new.html.twig', [ 
            'fiche' => $fiche,
            'fiches' => $fiches,
            'info' => $info,
            'totalBrut' => $totalBrut,
            'cnss' => $cnss,
            'imposable' => $imposable,
            'DFraisProf' => $DFraisProf,
            'DFamiliale' => $DFamiliale,
            'nbjCong' => $nbjCong,
            'nbjAbs' => $nbjAbs,
            'nbjTrav' => $nbjTrav ,
            'sommeAv' => $sommeAv,
            'IRPP' => $IRPP ,
            'salaireNet' => $salaireNet,
            'NetApayer' => $NetApayer,
            'contribSocialSolid' => $contribSocialSolid,
            'calculAbs' => $calculAbs,
            'check' => $check,
            'formF' => $formF->createView()

        ]);
    }


     public function getClickedButton()
     {
         if ($this->clickedButton) {
             return $this->clickedButton;
         }
         if ($this->parent && method_exists($this->parent, 'submit')) {
             return $this->parent->getClickedButton();
         }
     }


    /**
     * @Route("/fichePaie/delete/{id}", name="fiche_delete"  )
     */
    public function delete($id ,ManagerRegistry $doctrine){

        $fiche = $doctrine->getRepository(FichePaie::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($fiche);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('fiche_paie');



    }



    /**
     * @Route("/fichePaie/imprimer/{id}", name="imprime")
     */
    public function print(ManagerRegistry $doctrine ,$id): Response
    {
        $fiche = $doctrine->getRepository(FichePaie::class)->find($id);

        $dat_j=date("Y-m",time())."-01";
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('fiche_paie/imprimer.html.twig', [
            'fiche' => $fiche,
            'dat_j' => $dat_j

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("ficheDePaie.pdf", [
            "Attachment" => false
        ]);

    }

}
