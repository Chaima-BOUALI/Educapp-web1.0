<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Form\CompteRenduType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;


/**
 * @Route("/compte/rendu")
 */
class CompteRenduController extends AbstractController
{
    /**
     * @Route("/", name="compte_rendu_index", methods={"GET"})
     */
    public function index(): Response
    {
        $compteRendus = $this->getDoctrine()
            ->getRepository(CompteRendu::class)
            ->findAll();

        return $this->render('compte_rendu/index.html.twig', [
            'compte_rendus' => $compteRendus,
        ]);
    }

    /**
     * @Route("/new", name="compte_rendu_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $compteRendu = new CompteRendu();
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($compteRendu);
            $entityManager->flush();

            return $this->redirectToRoute('compte_rendu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('compte_rendu/new.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="compte_rendu_show", methods={"GET"})
     */
    public function show(CompteRendu $compteRendu): Response
    {
        return $this->render('compte_rendu/show.html.twig', [
            'compte_rendu' => $compteRendu,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="compte_rendu_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CompteRendu $compteRendu): Response
    {
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('compte_rendu_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('compte_rendu/edit.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/prc", name="compte_rendu_prc", methods={"GET","POST"})
     */
    public function prc(UserRepository $repo): Response
    {
        $res = $repo->Get_Pourcentage6();
        $total = $repo->Get_Total6();
        return $this->render('compte_rendu/res.html.twig', [
            'res' => $res, 'total' => $total
        ]);
    }

    /**
     * @Route("/{id}", name="compte_rendu_delete", methods={"POST"})
     */
    public function delete(Request $request, CompteRendu $compteRendu): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compteRendu->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($compteRendu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('compte_rendu_index', [], Response::HTTP_SEE_OTHER);
    }



}