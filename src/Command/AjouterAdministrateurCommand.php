<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AjouterAdministrateurCommand extends Command
{
    protected static $defaultName = 'app:ajouter-administrateur';
    protected static $defaultDescription = 'Cette commande crée un administrateur';

    private $passwordEncoder;
    private $entityManager;

    public function __construct(EntityManagerInterface $em, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->entityManager = $em;
        $this->passwordEncoder = $passwordEncoder;
        parent::__construct();
    }
    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Cette commande vous permet de créer un utilisateur')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $user = new User();
        $plainPassword = '00000';
        $name = 'PremierAdministrateur';
        $email = 'admin@EDUCAPP.tn';
        $roles = ['ROLE_USER', 'ROLE_ADMIN'];


        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($this->passwordEncoder->encodePassword($user, $plainPassword));
        $user->setRoles($roles);
        $user->setImage(null);

        // Save
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $output->writeln([
            'Createur utilisateur',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('Cest formidable');

        $io->success('Votre administrateur a ete crée avec succes');

        return 0;
    }
}


