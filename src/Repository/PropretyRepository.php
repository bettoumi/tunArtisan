<?php

namespace App\Repository;

use App\Entity\Proprety;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Proprety|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proprety|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proprety[]    findAll()
 * @method Proprety[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropretyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Proprety::class);
    }
    /**
     * Undocumented function
     *
     * @return proprety[]
     */
    public function findAllVisible():array
    {
        return $this->createQueryBuilder('p')
                    ->andWhere('p.sold = false')
                    ->getQuery()
                    ->getResult();
    }

    // /**
    //  * @return Proprety[] Returns an array of Proprety objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Proprety
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
