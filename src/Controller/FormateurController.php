<?php

namespace App\Controller;

use App\Entity\Formateur;
use App\Form\FormateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/formateur")
 */
class FormateurController extends AbstractController
{
    /**
     * @Route("/", name="formateur_index", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function index(): Response
    {
        $formateurs = $this->getDoctrine()
            ->getRepository(Formateur::class)
            ->findAll();

        return $this->render('formateur/index.html.twig', [
            'formateurs' => $formateurs,
        ]);
    }

    /**
     * @Route("/new", name="formateur_new", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $formateur = new Formateur();
        $form = $this->createForm(FormateurType::class, $formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formateur);
            $entityManager->flush();

            return $this->redirectToRoute('formateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formateur/new.html.twig', [
            'formateur' => $formateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formateur_show", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function show(Formateur $formateur): Response
    {
        return $this->render('formateur/show.html.twig', [
            'formateur' => $formateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="formateur_edit", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function edit(Request $request, Formateur $formateur): Response
    {
        $form = $this->createForm(FormateurType::class, $formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formateur/edit.html.twig', [
            'formateur' => $formateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formateur_delete", methods={"POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function delete(Request $request, Formateur $formateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formateur_index', [], Response::HTTP_SEE_OTHER);
    }
}
