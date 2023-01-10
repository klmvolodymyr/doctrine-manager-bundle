<?php

namespace Dt\DoctrineManagerBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait NameEntityTrait
{
    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string) $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}