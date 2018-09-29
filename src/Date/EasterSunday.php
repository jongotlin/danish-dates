<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class EasterSunday extends \JGI\SwedishDates\Date\EasterSunday
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Påskedag';
    }
}
