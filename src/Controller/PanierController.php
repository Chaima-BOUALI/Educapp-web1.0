<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Abonnement;
use App\Controller\AbonnementController;
use App\Repository\AbonnementRepository;
use App\Form\AbonnementType;


class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="index")
     */
    public function index(SessionInterface $session, AbonnementRepository $abonnementRepository)
    {
        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $abonnement = $abonnementRepository->find($id);
            $dataPanier[] = [
                "abonnement" => $abonnement,
                "quantite" => $quantite
            ];
            $total += $abonnement->getPrix() * $quantite;
        }

        return $this->render('panier/index.html.twig', [
            'total'=>$total,
        ]);
    }

    /**
     * @Route("/add/{id}", name="panier_add")
     */
    public function add(Abonnement $abonnement, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $abonnement->getId();

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
            // On sauvegarde dans la session
            $session->set("panier", $panier);

            return $this->redirectToRoute("panier_index");
        }


        $form =$this->createForm(AbonnementType::class, $abonnement);
        return $this->render('panier/index.html.twig', [
        "abonnement" => $abonnement,
        'form' => $form-> createView(),
    ]);
    }

    /**
     * @Route("/remove/{id}", name="panier_remove")
     */
    public function remove(Abonnement $abonnement, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $abonnement->getId();

        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("panier_index");
    }

    /**
     * @Route("/delete/{id}", name="panier_delete")
     */
    public function delete(Abonnement $abonnement, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $abonnement->getId();

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("panier_index");
    }

    /**
     * @Route("/delete", name="delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("panier_index");
    }

}