<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class NewYearsDay extends \JGI\SwedishDates\Date\NewYearsDay
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nytårsdag';
    }
}
