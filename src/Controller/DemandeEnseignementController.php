<?php

namespace App\Controller;

use App\Entity\DemandeEnseignement;
use App\Form\DemandeEnseignementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demande/enseignement")
 */
class DemandeEnseignementController extends AbstractController
{
    /**
     * @Route("/", name="demande_enseignement_index", methods={"GET"})
     */
    public function index(): Response
    {
        $demandeEnseignements = $this->getDoctrine()
            ->getRepository(DemandeEnseignement::class)
            ->findAll();

        return $this->render('demande_enseignement/index.html.twig', [
            'demande_enseignements' => $demandeEnseignements,
        ]);
    }

    /**
     * @Route("/new", name="demande_enseignement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $demandeEnseignement = new DemandeEnseignement();
        $form = $this->createForm(DemandeEnseignementType::class, $demandeEnseignement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demandeEnseignement);
            $entityManager->flush();

            return $this->redirectToRoute('demande_enseignement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_enseignement/new.html.twig', [
            'demande_enseignement' => $demandeEnseignement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="demande_enseignement_show", methods={"GET"})
     */
    public function show(DemandeEnseignement $demandeEnseignement): Response
    {
        return $this->render('demande_enseignement/show.html.twig', [
            'demande_enseignement' => $demandeEnseignement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="demande_enseignement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DemandeEnseignement $demandeEnseignement): Response
    {
        $form = $this->createForm(DemandeEnseignementType::class, $demandeEnseignement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_enseignement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_enseignement/edit.html.twig', [
            'demande_enseignement' => $demandeEnseignement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="demande_enseignement_delete", methods={"POST"})
     */
    public function delete(Request $request, DemandeEnseignement $demandeEnseignement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandeEnseignement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demandeEnseignement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('demande_enseignement_index', [], Response::HTTP_SEE_OTHER);
    }
}
