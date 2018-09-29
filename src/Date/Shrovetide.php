<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

use JGI\SwedishDates\Date\DayInterface;
use JGI\SwedishDates\Date\DayOccurOnceAYearInterface;

class Shrovetide implements DayInterface, DayOccurOnceAYearInterface
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
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isHoliday(): bool
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Fastelavn';
    }

    /**
     * {@inheritdoc}
     */
    public function getDateForYear(int $year)
    {
        $datetime = new \DateTime();
        $datetime->setTimestamp(easter_date($year));
        $datetime->modify('-49 day');

        return $datetime;
    }
}
