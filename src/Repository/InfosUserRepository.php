<?php

namespace App\Repository;

use App\Entity\InfosUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InfosUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosUser[]    findAll()
 * @method InfosUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InfosUser::class);
    }

    // /**
    //  * @return InfosUser[] Returns an array of InfosUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfosUser
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
