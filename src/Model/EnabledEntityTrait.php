<?php

namespace Dt\DoctrineManagerBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait EnabledEntityTrait
{
    /**
     * Active?
     *
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;

    /**
     * @param bool $active
     *
     * @return EnabledEntityTrait
     */
    public function setEnabled(bool $active): self
    {
        $this->enabled = $active;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}