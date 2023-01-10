<?php

namespace Dt\DoctrineManagerBundle\Utils;

use Ramsey\Uuid\Uuid;

class UuidHelper
{
    public static function decode(string $uuid): string
    {
        try {
            $id = Uuid::fromString($uuid)->getBytes();
        } catch (\InvalidArgumentException $e) {
            $id = ''; //need enable strict mode for sql
        }

        return $id;
    }

    public static function hex(string $uuid): string
    {
        return Uuid::fromString($uuid)->getHex();
    }
}