<?php

namespace App\Modules\Store\Repository;

use App\Entity\StoreOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class StoreOrdersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StoreOrders::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('s')
            ->where('s.something = :value')->setParameter('value', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
