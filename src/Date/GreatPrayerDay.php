<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

use JGI\SwedishDates\Date\DayInterface;
use JGI\SwedishDates\Date\DayOccurOnceAYearInterface;

class GreatPrayerDay implements DayInterface, DayOccurOnceAYearInterface
{
    /**
     * {@inheritdoc}
     */
    public function match(\DateTime $datetime): bool
    {
        return $this->getDateForYear((int) $datetime->format('Y'))->format('Y-m-d') == $datetime->format('Y-m-d');
    }

    /**
     * {@inheritdoc}
     */
    public function isRed(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHoliday(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Store Bededag';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $datetime = new \DateTime();
        $datetime->setTimestamp(easter_date($year));
        $datetime->modify('+26 day');

        return $datetime;
    }
}
