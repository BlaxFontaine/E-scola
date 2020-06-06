<?php

namespace App\Repository;

use App\Entity\HomeVisit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomeVisit|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeVisit|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeVisit[]    findAll()
 * @method HomeVisit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeVisitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeVisit::class);
    }

    // /**
    //  * @return HomeVisit[] Returns an array of HomeVisit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeVisit
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
