<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class UNDay extends \JGI\SwedishDates\Date\UNDay
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'FN-dagen';
    }
}
