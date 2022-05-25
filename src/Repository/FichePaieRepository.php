<?php

namespace App\Repository;

use App\Entity\FichePaie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FichePaie|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichePaie|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichePaie[]    findAll()
 * @method FichePaie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichePaieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichePaie::class);
    }

    // /**
    //  * @return FichePaie[] Returns an array of FichePaie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    
    // public function findOneByMatricule($matricule): ?FichePaie
    // {
    //     return $this->createQueryBuilder('m')
    //         ->andWhere('m.matricule = :mat')
    //         ->setParameter('mat', $matricule)
    //         ->getQuery()
    //         ->getOneOrNullResult()
    //     ;
    // }

}
