<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class EasterMonday extends \JGI\SwedishDates\Date\EasterMonday
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return '2. Påskedag';
    }
}
