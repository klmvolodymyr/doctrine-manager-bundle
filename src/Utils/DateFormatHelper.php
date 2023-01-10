<?php

namespace Dt\DoctrineManagerBundle\Utils;
//namespace Dt\DoctrineManagerBundle\Helper;

class DateFormatHelper
{
    public static function format(string|\DateTime|null $date, string $format = 'Y-m-d\TH:i:sP'): string
    {
        $result = '';
        $dateObject = null;

        if ($date instanceof \DateTime) {
            $dateObject = $date;
        } elseif (\is_numeric($date) && self::validateTimestamp($date)) {
            $dateObject = new \DateTime('@'.$date);
        } elseif (self::validateDate($date)) {
            $dateObject = new \DateTime($date);
        }

        if (null !== $dateObject) {
            $result = \str_replace('+00:00', 'Z',
                $dateObject->setTimezone(new \DateTimeZone('UTC'))->format($format)
            );
        }

        return $result;
    }

    public static function validateDate(?string$date): bool
    {
        return $date && \date_create($date) !== false;
    }

    public static function validateTimestamp(?string$timestamp): bool
    {
        return $timestamp && \strlen($timestamp) === 10 && \date_create('@'.$timestamp) !== false;
    }
}