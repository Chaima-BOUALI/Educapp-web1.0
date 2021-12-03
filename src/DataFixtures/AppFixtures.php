<?php

namespace App\DataFixtures;
use App\Entity\Abonnement;
use App\Entity\Session;
use App\Entity\Publicity;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Session1 = new Session();
        $Session1->setNomSession("Java");
        $Session1->setDescriptionSession(" java cours");
        $Session1->setPlacesDisponibles("250");
        /*$Session1->setStartDate(Session::setStartDate("15/12/2021"));
        $Session1->setEndDate(25/12/2021);*/
        $manager->persist($Session1);


        $Abonnement1 =new Abonnement();
        $Abonnement1->setTypeAbonnement("prémium");
        $Abonnement1->setSession($Session1);
        $manager->persist($Abonnement1);

        $Abonnement2 =new Abonnement();
        $Abonnement2->setTypeAbonnement("premium");
        $Abonnement2->setSession($Session1);
        $manager->persist($Abonnement2);

        $Abonnement3 =new Abonnement();
        $Abonnement3->setTypeAbonnement("Ordinaire");
        $Abonnement3->setSession($Session1);
        $manager->persist($Abonnement3);

        $Abonnement4 =new Abonnement();
        $Abonnement4->setTypeAbonnement("Senior");
        $Abonnement4->setSession($Session1);
        $manager->persist($Abonnement4);

        $Sessions = [$Abonnement1, $Abonnement2, $Abonnement3,$Abonnement4];

        $faker = \Faker\Factory::create("fr_FR");
        foreach ($Sessions as $S) {
            $rand = rand(3, 5);
            for ($i = 0; $i < $rand; $i++) {
                $Publicity = new Publicity;
                $Publicity->setNomPublicity($faker->name, "\n");
                $Publicity->setDescriptionPub("pub orange");



                $manager->persist($Publicity);
            }
        }
        $manager->flush();


    }

}
