<?php

namespace App\Controller;

use App\Entity\Ressource;
use App\Form\RessourceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/ressource")
 */
class RessourceController extends AbstractController
{
    /**
     * @Route("/", name="ressource_index", methods={"GET"})
     * @IsGranted ("ROLE_USER")
     */
    public function index(): Response
    {
        $ressources = $this->getDoctrine()
            ->getRepository(Ressource::class)
            ->findAll();

        return $this->render('ressource/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }

    /**
     * @Route("/new", name="ressource_new", methods={"GET","POST"})
     * @IsGranted ("ROLE_USER")
     */
    public function new(Request $request): Response
    {
        $ressource = new Ressource();
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ressource);
            $entityManager->flush();

            return $this->redirectToRoute('ressource_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ressource/new.html.twig', [
            'ressource' => $ressource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ressource_show", methods={"GET"})
     * @IsGranted ("ROLE_USER")
     */
    public function show(Ressource $ressource): Response
    {
        return $this->render('ressource/show.html.twig', [
            'ressource' => $ressource,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ressource_edit", methods={"GET","POST"})
     * @IsGranted ("ROLE_USER")
     */
    public function edit(Request $request, Ressource $ressource): Response
    {
        $form = $this->createForm(RessourceType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ressource_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ressource/edit.html.twig', [
            'ressource' => $ressource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ressource_delete", methods={"POST"})
     * @IsGranted ("ROLE_USER")
    
     */
    public function delete(Request $request, Ressource $ressource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ressource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ressource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ressource_index', [], Response::HTTP_SEE_OTHER);
    }
}
