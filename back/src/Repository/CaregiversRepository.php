<?php

namespace App\Repository;

use App\Entity\Caregivers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Caregivers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caregivers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caregivers[]    findAll()
 * @method Caregivers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaregiversRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caregivers::class);
    }

    // /**
    //  * @return Caregivers[] Returns an array of Caregivers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Caregivers
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
