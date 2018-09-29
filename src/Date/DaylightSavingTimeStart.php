<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class DaylightSavingTimeStart extends \JGI\SwedishDates\Date\DaylightSavingTimeStart
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sommertid begynder';
    }
}
