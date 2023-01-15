<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Specification;

use Doctrine\ORM\QueryBuilder;
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationApplier;
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

class ImmutableSpecApplier extends SpecificationApplier
{
    /**
     * {@inheritdoc}
     */
    public static function apply(
        SpecificationInterface $specification,
        QueryBuilder $queryBuilder,
        string $alias = null
    ): void {
        if ($specification instanceof ImmutableSpecInterface) {
            $specification = $specification->getSpec();
        }

        parent::apply($specification, $queryBuilder, $alias);
    }
}