<?php

namespace App\Repository;

use App\Entity\DatesConges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DatesConges|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatesConges|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatesConges[]    findAll()
 * @method DatesConges[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatesCongesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatesConges::class);
    }

    // /**
    //  * @return DatesConges[] Returns an array of DatesConges objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DatesConges
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
