<?php

namespace App\Controller;

use App\Entity\Publicity;
use App\Form\PublicityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/publicity")
 */
class PublicityController extends AbstractController
{
    /**
     * @Route("/", name="publicity_index", methods={"GET"})
     */
    public function index(): Response
    {
        $publicities = $this->getDoctrine()
            ->getRepository(Publicity::class)
            ->findAll();

        return $this->render('publicity/home.html.twig', [
            'publicities' => $publicities,
        ]);
    }

    /**
     * @Route("/new", name="publicity_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $publicity = new Publicity();
        $form = $this->createForm(PublicityType::class, $publicity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($publicity);
            $entityManager->flush();

            return $this->redirectToRoute('publicity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publicity/new.html.twig', [
            'publicity' => $publicity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publicity_show", methods={"GET"})
     */
    public function show(Publicity $publicity): Response
    {
        return $this->render('publicity/show.html.twig', [
            'publicity' => $publicity,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publicity_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Publicity $publicity): Response
    {
        $form = $this->createForm(PublicityType::class, $publicity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publicity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publicity/edit.html.twig', [
            'publicity' => $publicity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publicity_delete", methods={"POST"})
     */
    public function delete(Request $request, Publicity $publicity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publicity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($publicity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publicity_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/pub/acc", name="pub_acc")
     */
    public function acc(): Response
    {


        $publicities = $this->getDoctrine()
            ->getRepository(Publicity::class)
            ->findAll();

        return $this->render('publicity/acc.html.twig', [
            'publicities' => $publicities,
        ]);
    }
}
