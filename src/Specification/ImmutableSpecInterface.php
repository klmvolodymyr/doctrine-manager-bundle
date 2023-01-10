<?php

namespace Dt\DoctrineManagerBundle\Specification;

use Igdr\DoctrineSpecification\SpecificationInterface;

interface ImmutableSpecInterface extends SpecificationInterface
{
    /**
     * @return SpecificationInterface
     */
    public function getSpec(): SpecificationInterface;
}