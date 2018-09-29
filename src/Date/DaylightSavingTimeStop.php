<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class DaylightSavingTimeStop extends \JGI\SwedishDates\Date\DaylightSavingTimeStop
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sommertid ender';
    }
}
