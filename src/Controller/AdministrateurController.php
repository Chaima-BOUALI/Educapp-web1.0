<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
class AdministrateurController extends AbstractController
{
    /**
     * @Route("/administrateur", name="administrateur")
     */
    public function index(): Response
    {
        return $this->render('administrateur/index.html.twig', [
            'controller_name' => 'AdministrateurController',
        ]);
    }
}
