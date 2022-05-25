<?php

namespace App\Repository;

use App\Entity\Avance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Avance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avance[]    findAll()
 * @method Avance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avance::class);
    }

    // /**
    //  * @return Avance[] Returns an array of Avance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Avance
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
