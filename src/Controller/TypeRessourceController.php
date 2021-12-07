<?php

namespace App\Controller;

use App\Entity\TypeRessource;
use App\Form\TypeRessourceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/type/ressource")
 */
class TypeRessourceController extends AbstractController
{
    /**
     * @Route("/", name="type_ressource_index", methods={"GET"})
     * @IsGranted ("ROLE_USER")
     */
    public function index(): Response
    {
        $typeRessources = $this->getDoctrine()
            ->getRepository(TypeRessource::class)
            ->findAll();

        return $this->render('type_ressource/index.html.twig', [
            'type_ressources' => $typeRessources,
        ]);
    }

    /**
     * @Route("/new", name="type_ressource_new", methods={"GET","POST"})
     * @IsGranted ("ROLE_USER")
     */
    public function new(Request $request): Response
    {
        $typeRessource = new TypeRessource();
        $form = $this->createForm(TypeRessourceType::class, $typeRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeRessource);
            $entityManager->flush();

            return $this->redirectToRoute('type_ressource_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_ressource/new.html.twig', [
            'type_ressource' => $typeRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_ressource_show", methods={"GET"})
     * @IsGranted ("ROLE_USER")
     */
    public function show(TypeRessource $typeRessource): Response
    {
        return $this->render('type_ressource/show.html.twig', [
            'type_ressource' => $typeRessource,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_ressource_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeRessource $typeRessource): Response
    {
        $form = $this->createForm(TypeRessourceType::class, $typeRessource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_ressource_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_ressource/edit.html.twig', [
            'type_ressource' => $typeRessource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_ressource_delete", methods={"POST"})
     * @IsGranted ("ROLE_USER")
     */
    public function delete(Request $request, TypeRessource $typeRessource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeRessource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeRessource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_ressource_index', [], Response::HTTP_SEE_OTHER);
    }
}
