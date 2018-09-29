<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class Sunday extends \JGI\SwedishDates\Date\Sunday
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Søndag';
    }
}
