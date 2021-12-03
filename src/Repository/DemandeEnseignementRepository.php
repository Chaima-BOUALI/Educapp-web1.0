<?php

namespace App\Repository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DemandeEnseignement|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeEnseignement|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeEnseignement[]    findAll()
 * @method DemandeEnseignement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeEnseignementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeEnseignement::class);
    }


    // /**
    //  * @return Publicity[] Returns an array of DemandeEnseignement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Publicity
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
