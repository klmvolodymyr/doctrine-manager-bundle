<?php

namespace Dt\DoctrineManagerBundle\Specification;

use Doctrine\ORM\QueryBuilder;
use Igdr\DoctrineSpecification\SpecificationApplier;
use Igdr\DoctrineSpecification\SpecificationInterface;

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