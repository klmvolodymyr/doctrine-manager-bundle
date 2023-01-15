<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Specification;

// TODO: First update and republish dependencies
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

interface BaseSpecInterface extends SpecificationInterface
{
    /**
     * @return BaseSpecInterface
     */
    public static function create(): BaseSpecInterface;

    /**
     * @return BaseSpecInterface
     */
    public function applyWhere(): BaseSpecInterface;

    /**
     * @return BaseSpecInterface
     */
    public function applyOrder(): BaseSpecInterface;
}