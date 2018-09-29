<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class ChristmasEve extends \JGI\SwedishDates\Date\ChristmasEve
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Juleaftensdag';
    }
}
