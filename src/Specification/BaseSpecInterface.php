<?php

namespace Dt\DoctrineManagerBundle\Specification;

// TODO: First update and republish dependecy
use Igdr\DoctrineSpecification\SpecificationInterface;

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