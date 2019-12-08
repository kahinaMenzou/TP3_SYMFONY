<?php

namespace App\Repository;

use App\Entity\Doctorale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Doctorale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Doctorale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Doctorale[]    findAll()
 * @method Doctorale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctoraleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Doctorale::class);
    }

    // /**
    //  * @return Doctorale[] Returns an array of Doctorale objects
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
    public function findOneBySomeField($value): ?Doctorale
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
