<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class NewYearsEve extends \JGI\SwedishDates\Date\NewYearsEve
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nytårsaftensdag';
    }
}
