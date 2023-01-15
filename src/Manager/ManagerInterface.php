<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Manager;

use VolodymyrKlymniuk\DoctrineSpecification\LazySpecificationCollection;
use VolodymyrKlymniuk\DoctrineSpecification\ResultTransformer\ResultTransformerInterface;
use VolodymyrKlymniuk\DoctrineSpecification\SpecificationInterface;

interface ManagerInterface
{
    public function find(SpecificationInterface $specification, ResultTransformerInterface $resultTransformer = null): LazySpecificationCollection;
    public function findOne(SpecificationInterface $specification): ?object;
    public function supports(): string;
}