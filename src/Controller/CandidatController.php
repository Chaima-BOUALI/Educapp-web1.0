<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Form\CandidatType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Session;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\SessionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;


/**
 * @Route("/candidat")

 */
class CandidatController extends AbstractController
{
    /**
     * @Route("/", name="candidat_index", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function index(): Response
    {
        $candidats = $this->getDoctrine()
            ->getRepository(Candidat::class)
            ->findAll();

        return $this->render('candidat/index.html.twig', [
            'candidats' => $candidats,
        ]);
    }

    /**
     * @Route("/new", name="candidat_new", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $candidat = new Candidat();
        $form = $this->createForm(CandidatType::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidat);
            $entityManager->flush();

            return $this->redirectToRoute('candidat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('candidat/new.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidat_show", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function show(Candidat $candidat): Response
    {
        return $this->render('candidat/show.html.twig', [
            'candidat' => $candidat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidat_edit", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function edit(Request $request, Candidat $candidat): Response
    {
        $form = $this->createForm(CandidatType::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('candidat/edit.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/prc", name="candidat_prc", methods={"GET","POST"})
     * @ParamConverter
     *  @IsGranted ("ROLE_ADMIN")

     */
    public function prc(UserRepository $repository): Response
    {
        $res = $repository->Get_Pourcentage5();
        $total= $repository->Get_Total5();
        return $this->render('candidat/res.html.twig', [
            'res' => $res, 'total' => $total
        ]);
    }

    /**
     * @Route("/{id}", name="candidat_delete", methods={"POST"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function delete(Request $request, Candidat $candidat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('candidat_index', [], Response::HTTP_SEE_OTHER);
    }


}
