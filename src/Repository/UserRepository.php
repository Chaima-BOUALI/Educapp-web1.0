<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Session;
use App\Entity\Ressource;
use App\Entity\Publicity;
use App\Entity\Candidat;
use App\Entity\CompteRendu;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }


    public function Get_Pourcentage()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(A)as Nbr,S.nomSession FROM App\Entity\Abonnement A  ,App\Entity\Session S Where A.session=S.id GROUP BY A.session');
        return $query->getResult();
    }

    public function Get_Total()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(A)as total FROM App\Entity\Abonnement A ');
        return $query->getSingleScalarResult();
    }

    public function Get_Pourcentage2()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(R)as Nbr,S.nomSession FROM App\Entity\Ressource R  ,App\Entity\Session S Where R.session=S.id GROUP BY R.session');
        return $query->getResult();
    }

    public function Get_Total2()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(R)as total FROM App\Entity\Ressource R ');
        return $query->getSingleScalarResult();
    }

    public function Get_Pourcentage5()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(C)as Nbr,S.nomSession FROM App\Entity\Candidat C  ,App\Entity\Session S Where C.session=S.id GROUP BY C.session');
        return $query->getResult();
    }

    public function Get_Total5()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(C)as total FROM App\Entity\Candidat C');
        return $query->getSingleScalarResult();
    }

    public function Get_Pourcentage3()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(P)as Nbr,S.nomSession FROM App\Entity\Publicity P  ,App\Entity\Session S Where P.session=S.id GROUP BY P.session');
        return $query->getResult();
    }

    public function Get_Total3()
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT COUNT(P)as total FROM App\Entity\Publicity P');
        return $query->getSingleScalarResult();
    }

}
