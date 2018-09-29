<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class ChristmasDay extends \JGI\SwedishDates\Date\ChristmasDay
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Juledag';
    }
}
