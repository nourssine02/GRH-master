<?php

namespace App\Controller;

use DateTime;
use App\Entity\Conges;
use App\Form\CongesType;
use App\Repository\CongesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CongesController extends AbstractController
{
    /**
     * @Route("/conges", name="conges_list")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
         $conges = $doctrine->getRepository(Conges::class)->findAll();

        return $this->render('conges/list.html.twig', [
            'conges' => $conges
        ]);
    }

      /**
     * @Route("/conges/calendrier", name="conges_calendrier")
     */
    public function view(CongesRepository $calendar )
    {
            $events = $calendar->findAll();
            $demandes = [];
            foreach ( $events  as  $event ) {
                $demandes [] = [
                    'id' => $event->getId(),
                    'employe' => $event->getEmploye()->getNom(),
                    'dateDemande'=> $event->getDateDemande()->format('Y-m-d H:i:s'),
                    'start'=> $event->getStart()->format('Y-m-d H:i:s'),
                    'end' => $event->getEnd()->format('Y-m-d H:i:s' ),
                    'title' => $event->getTitle(),
                    'nbreJours' => $event->getNbreJours(),
                    'backgroundColor' => $event->getBackgroundColor(),
                    'textColor' => $event->getTextColor(),
                    'allDay' => $event->getAllDay()
                ];
        
            }
        $data = json_encode($demandes);
        return $this->render('conges/calendrier.html.twig',compact('data'));
    }


    /**
     * @Route("/conges/calendar/update/{id}", name="conges_update"   )
     */
    public function updateCalendar(Request $request , Conges $calendar ,ManagerRegistry $doctrine){

        //on recupere les donnees 
        $donnees = json_decode($request->getContent()); 
        if(
             isset($donnees->title) &&  !empty($donnees->title) && 
             isset($donnees->start) &&  !empty($donnees->start) && 
             isset($donnees->end) &&    !empty($donnees->end) && 

             isset($donnees->backgroundColor) &&  !empty($donnees->backgroundColor) && 
             isset($donnees->textColor) &&        !empty($donnees->textColor)
        ){
            // les donnees sont completes
            //on utilise un code 
            $code = 200; 

            // on verifie si id existe
            if( !$calendar ){
                //on instancie un demande de conge
                $calendar = new Conges;
                // on change le code
                $code = 201;
            }
            // on hydrate l' objet avec les donnees 
            $calendar->setTitle($donnees->title);
            $calendar->setStart( new DateTime ($donnees->start));
            if ($donnees->allDay) {
                $calendar->setEnd( new DateTime($donnees->start));
            }else{
                $calendar->setEnd( new DateTime($donnees->end));

            }
            $calendar->setAllDay($donnees->allDay);
            $calendar->setBackgroundColor($donnees->backgroundColor);
            $calendar->setTextColor($donnees->textColor);

            $em = $doctrine->getManager();
            $em->persist($calendar);
            $em->flush();
        
            // on retourne le code 
            return new Response('OK', $code);

        } else {
             // les donnees sont incompletes
             return new Response('Données incomplètes' , 404);
        }

          return $this->render('conges/calendrier.html.twig', []);
    }
    

      /**
     * @Route("/conges/new", name="conges_new")
     */
    public function add(Request $request ,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $conge = new Conges();
        $formC = $this->createForm(CongesType::class , $conge);
        $formC->handleRequest($request);

        if ($formC->isSubmitted() && $formC->isValid()) {
    
            $diffDate = date_diff( $conge->getStart() , $conge->getEnd())->d;
            if($diffDate == 1){
                $conge->setNbreJours($diffDate);

            }
            else{
                $conge->setNbreJours($diffDate -1);
            }
            $em->persist($conge);
            $em->flush();
        $this->addFlash('info','Envoyée avec Succées ');
        return $this->redirectToRoute('conges_list');

        }

        return $this->render('conges/new.html.twig', [
            "conge" => $conge,
            'formC' => $formC->createView()
        ]);
    }


      /**
     * @Route("/conges/update/{id}", name="conges_updateList" )
     */
    public function update(Request $request , Conges $calendar  , $id,ManagerRegistry $doctrine){

            $em = $doctrine->getManager();
            $conge = $doctrine->getRepository(Conges::class)->find($id);

         $formC = $this->createForm(CongesType::class , $conge);
            $formC->handleRequest($request);
            if ($formC->isSubmitted() && $formC->isValid()) {

                $diffDate = date_diff( $conge->getStart() , $conge->getEnd())->d+1;
                $conge->setNbreJours($diffDate);
                $em->persist($calendar);
                $em->flush();
                $this->addFlash('info','Modifiée avec Succées ');
            
                return $this->redirectToRoute('conges_list');
    
            }
            
       return $this->render('conges/update.html.twig', [
           'calendar' => $calendar,
            'formC' => $formC->createView()

       ]);

    }
    


    /**
     * @Route("/conges/delete/{id}", name="conges_delete"  )
     */
    public function delete($id,ManagerRegistry $doctrine){
        
        $conges = $doctrine->getRepository(Conges::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($conges);
        $em ->flush();


        $this->addFlash('info','Supprimée avec Succées ');
        return $this->redirectToRoute('conges_list');



    }

    

      /**
     * @Route("/conges/accepter/{id}", name="conges_accepter")
     */
    public function ajax1(Request $request   , $id,ManagerRegistry $doctrine  ): Response
    {
            $conge =$doctrine->getRepository(Conges::class)->find($id);
            $conges = $doctrine->getRepository(Conges::class)->findAll();

    
            $em = $doctrine->getManager();   
            $accepter = 'acceptée';
            $conge->setStatut($accepter);
            $em->persist($conge);
            $em->flush();

        return $this->render('conges/ajax.html.twig', [
            'conge' => $conges,
            'conges' => $conges,
        ]);
    }


     /**
     * @Route("/conges/refuser/{id}", name="conges_refuser")
     */
    public function ajax2(Request $request   , $id,ManagerRegistry $doctrine  ): Response
    {
            $conge =$doctrine->getRepository(Conges::class)->find($id);
            $conges = $doctrine->getRepository(Conges::class)->findAll();

    
            $em = $doctrine->getManager();   
        
            $refuser = 'refusée';
             $conge->setStatut($refuser);
            $em->persist($conge);
            $em->flush();

        return $this->render('conges/ajax.html.twig', [
            'conge' => $conges,
            'conges' => $conges,
        ]);
    }
}
