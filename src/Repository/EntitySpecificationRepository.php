<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Repository;

use Doctrine\ORM\QueryBuilder;
use VolodymyrKlymniuk\DoctrineManagerBundle\Specification\ImmutableSpecApplier;
use VolodymyrKlymniuk\DoctrineSpecification\EntitySpecificationRepository as BaseEntitySpecificationRepository;
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

class EntitySpecificationRepository extends BaseEntitySpecificationRepository
{
    /**
     * @var string alias
     */
    private $alias = 'e';

    /**
     * {@inheritdoc}
     */
    public function getQueryBuilder(SpecificationInterface $specification): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder($this->alias);

        //apply specification to the query builder
        ImmutableSpecApplier::apply(clone $specification, $queryBuilder, $this->getAlias());

        return $queryBuilder;
    }
}