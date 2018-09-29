<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class Pentecost extends \JGI\SwedishDates\Date\Pentecost
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Pinsedag';
    }
}
