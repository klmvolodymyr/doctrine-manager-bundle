<?php

namespace Dt\DoctrineManagerBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait EntityIdTrait
{
    /**
     * ID
     *
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int) $this->id;
    }
}