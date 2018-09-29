<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class MaundyThursday extends \JGI\SwedishDates\Date\MaundyThursday
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Skærtorsdag';
    }

    /**
     * {@inheritdoc}
     */
    public function isRed(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isHoliday(): bool
    {
        return false;
    }
}
