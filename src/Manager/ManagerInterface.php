<?php

namespace Dt\DoctrineManagerBundle\Manager;

use Igdr\DoctrineSpecification\LazySpecificationCollection;
use Igdr\DoctrineSpecification\ResultTransformer\ResultTransformerInterface;
use Igdr\DoctrineSpecification\SpecificationInterface;

interface ManagerInterface
{
    public function find(SpecificationInterface $specification, ResultTransformerInterface $resultTransformer = null): LazySpecificationCollection;
    public function findOne(SpecificationInterface $specification): ?object;
    public function supports(): string;
}