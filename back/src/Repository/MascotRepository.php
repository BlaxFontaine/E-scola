<?php

namespace App\Repository;

use App\Entity\Mascot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mascot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mascot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mascot[]    findAll()
 * @method Mascot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MascotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mascot::class);
    }

    // /**
    //  * @return Mascot[] Returns an array of Mascot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mascot
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
