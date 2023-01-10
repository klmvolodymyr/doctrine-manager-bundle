<?php

namespace Dt\DoctrineManagerBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait OrderingEntityTrait
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ordering = 500;

    /**
     * @param int $ordering
     *
     * @return $this
     */
    public function setOrdering(int $ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrdering(): int
    {
        return (int) $this->ordering;
    }
}