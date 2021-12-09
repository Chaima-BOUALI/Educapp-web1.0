<?php

namespace App\Controller;

use App\Form\PublicityType;
use App\Entity\Session;
use App\Entity\Publicity;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Form\SessionType;

/**
 * @Route("/publicity")
 */
class PublicityController extends AbstractController
{
    /**
     * @Route("/", name="publicity_index", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function index(): Response
    {
        $publicities = $this->getDoctrine()
            ->getRepository(Publicity::class)
            ->findAll();

        return $this->render('publicity/index.html.twig', [
            'publicities' => $publicities,
        ]);
    }

    /**
     * @Route("/new", name="publicity_new", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
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
     * @IsGranted ("ROLE_ADMIN")
     */
    public function show(Publicity $publicity): Response
    {
        return $this->render('publicity/show.html.twig', [
            'publicity' => $publicity,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publicity_edit", methods={"GET","POST"})
     * @IsGranted ("ROLE_ADMIN")
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
     * @IsGranted ("ROLE_ADMIN")
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
     * @Route("/prc", name="publicity_prc", methods={"GET","POST"})
     *
     */
    public function prc (UserRepository $repo): Response
    {
        $res = $repo->Get_Pourcentage3();
        $total= $repo->Get_Total3();
        return $this->render('publicity/res.html.twig', [
            'res' => $res, 'total' => $total
        ]);
    }
    /**
     * @Route("/pub/acc", name="pub_acc")
     */
    public function acc( Request $request): Response
    {


        $publicities = $this->getDoctrine()
            ->getRepository(Publicity::class)
            ->findAll();

        return $this->render('publicity/acc.html.twig', [
            'publicities' => $publicities,
        ]);
    }

}
