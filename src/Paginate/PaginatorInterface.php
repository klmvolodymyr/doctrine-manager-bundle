<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Paginate;

use Doctrine\Common\Collections\AbstractLazyCollection;

interface PaginatorInterface
{
    /**
     * @param AbstractLazyCollection $collection
     *
     * @return mixed
     */
    public function paginate(AbstractLazyCollection $collection);
}