<?php

namespace JGI\DanishDates\Tests\Date;

use JGI\DanishDates\Date\GreatPrayerDay;
use JGI\SwedishDates\Tests\Date\AbstractDayTest;

class GreatPrayerDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new GreatPrayerDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-05-12'],
            ['2018-04-27'],
            ['2019-05-17'],
            ['2020-05-08'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-05-13'],
            ['2018-04-26'],
            ['2019-05-18'],
            ['2020-05-07'],
        ];
    }
}
