<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Session;
use App\Entity\Abonnement;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Session1 = new Session();
        $Session1->setNomSession("Java");
        $Session1->setDescriptionSession("Cours java");
        $Session1->setCategorieSession("janvier");
        $Session1->setPlacesDisponibles("42");
        $Session1->setUrlImage("image.png");

        $manager->persist($Session1);

        $Abonnement1 = new Abonnement();
        $Abonnement1->setTypeAbonnement("Ordinaire");
        $Abonnement1->setSession($Session1);
        $manager->persist($Abonnement1);

        $Abonnement2 = new Abonnement();
        $Abonnement2->setTypeAbonnement("Senior");
        $Abonnement2->setSession($Session1);
        $manager->persist($Abonnement2);

        $Abonnement3 = new Abonnement();
        $Abonnement3->setTypeAbonnement("Premium");
        $Abonnement3->setSession($Session1);
        $manager->persist($Abonnement2);

        $Abonnements = [$Abonnement1, $Abonnement2, $Abonnement3];
        $faker = \Faker\Factory::create("fr_FR");
        foreach ($Abonnements as $A) {
            $rand = rand(3, 5);
            for ($i = 0; $i < $rand; $i++) {
                $Session = new Session();
                $Session->setNomSession($faker->text(20));
                $Session->setStartDate($faker->dateTime($format = 'Y-m-d'));
                $Session->setEndDate($faker->dateTime($format = 'Y-m-d'));
                $Session->setDescriptionSession($faker->text(200));
                $Session->setPlacesDisponibles($faker->numberBetween($max = '50', $min = '10'));
                $Session->setUrlImage($faker->imageUrl(640));
                $Session->setCategorieSession($faker->text(20));
                $manager->persist($Session);
            }
        }
        $manager->flush();
    }
}