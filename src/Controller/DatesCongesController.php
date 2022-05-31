<?php

namespace App\Controller;

use App\Entity\DatesConges;
use App\Form\DatesCongesType;
use App\Repository\DatesCongesRepository;
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dates/conges")
 */
class DatesCongesController extends AbstractController
{
    /**
     * @Route("/", name="dates_conges_index", methods={"GET"})
     */
    public function index(DatesCongesRepository $datesCongesRepository): Response
    {
        $dateJour = new \DateTime('now');

        return $this->render('dates_conges/index.html.twig', [
            'dates_conges' => $datesCongesRepository->findAll(),
            'dateJour' => $dateJour
        ]);
    }

    /**
     * @Route("/new", name="dates_conges_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager ): Response
    {
        $datesConge = new DatesConges();
        $form = $this->createForm(DatesCongesType::class, $datesConge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $diffDate = date_diff($datesConge->getStart(), $datesConge->getEnd())->d;

                if ($diffDate <= 21) {
                    $entityManager->persist($datesConge);
                    $entityManager->flush();
                    $this->addFlash('success', 'Envoyée avec Succées ');
                    return $this->redirectToRoute('dates_conges_index', [], Response::HTTP_SEE_OTHER);

                } else {
                    $this->addFlash('info', "Vous n'avez droit qu'à 21 jours de congé");

                }


        }

        return $this->renderForm('dates_conges/new.html.twig', [
            'dates_conge' => $datesConge,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="dates_conges_show", methods={"GET"})
     */
    public function show(DatesConges $datesConge): Response
    {
        return $this->render('dates_conges/show.html.twig', [
            'dates_conge' => $datesConge,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dates_conges_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, DatesConges $datesConge, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DatesCongesType::class, $datesConge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Modifier avec Succées ');

            return $this->redirectToRoute('dates_conges_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dates_conges/edit.html.twig', [
            'dates_conge' => $datesConge,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="dates_conges_delete", methods={"POST"})
     */
    public function delete(Request $request, DatesConges $datesConge, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$datesConge->getId(), $request->request->get('_token'))) {
            $entityManager->remove($datesConge);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dates_conges_index', [], Response::HTTP_SEE_OTHER);
    }


}
