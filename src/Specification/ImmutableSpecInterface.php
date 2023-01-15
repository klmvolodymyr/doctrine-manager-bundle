<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Specification;

use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

interface ImmutableSpecInterface extends SpecificationInterface
{
    /**
     * @return SpecificationInterface
     */
    public function getSpec(): SpecificationInterface;
}