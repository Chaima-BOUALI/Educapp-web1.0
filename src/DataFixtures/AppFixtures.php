<?php

namespace App\DataFixtures;


use App\Entity\Reclamation;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $User1 = new User();
        $User1->setEmail("dhafer@educapp.com");
        $User1->setPassword("1234567");
        $User1->setRoles("Candidat");

        $manager->persist($User1);

        $User2 = new User();
        $User2->setEmail("abc@educapp.com");
        $User2->setPassword("12345678");
        $User2->setRoles("Formateur");

        $manager->persist($User2);

        $User3 = new User();
        $User1->setEmail("bbb@educapp.com");
        $User1->setPassword("1234567");
        $User1->setRoles("Candidat");

        $manager->persist($User3);



        $Users = [$User1, $User2, $User3];

        $faker = \Faker\Factory::create("fr_FR");
        foreach ($Users as $U) {
            $rand = rand(3, 5);
            for ($i = 0; $i < $rand; $i++) {
                $Reclamation = new Reclamation();
                $Reclamation->setNomReclamation($faker->name, "\n");
                $Reclamation->setEtatReclamation("Non Traitée");
                $Reclamation->setContenuReclamation("Contenu manquant");
                $manager->persist($Reclamation);
            }
        }
        $manager->flush();


    }

}
