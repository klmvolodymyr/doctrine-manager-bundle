<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Manager;

use VolodymyrKlymniuk\DoctrineManagerBundle\DependencyInjection\EntityManagerAwareTrait;
use VolodymyrKlymniuk\DoctrineManagerBundle\DependencyInjection\EventDispatcherAwareTrait;

use VolodymyrKlymniuk\DoctrineSpecification\EntitySpecificationRepository;
use VolodymyrKlymniuk\DoctrineSpecification\LazySpecificationCollection;
use VolodymyrKlymniuk\DoctrineSpecification\ResultTransformer\ResultTransformerInterface;
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractManager implements ManagerInterface
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * PaymentsManager constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function find(SpecificationInterface $specification, ResultTransformerInterface $resultTransformer = null): LazySpecificationCollection {
        return $this->getRepository()->match($specification, $resultTransformer);
    }

    public function findOne(SpecificationInterface $specification): ?object
    {
        return $this->getRepository()->matchOneOrNullResult($specification);
    }

    abstract public function supports(): string;
    abstract protected function getRepository(): EntitySpecificationRepository;
}