<?php

namespace JGI\DanishDates\Tests\Date;

use JGI\DanishDates\Date\WhitMonday;
use JGI\SwedishDates\Tests\Date\AbstractDayTest;

class WhitMondayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new WhitMonday();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-06-05'],
            ['2018-05-21'],
            ['2019-06-10'],
            ['2020-06-01'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-06-04'],
            ['2018-05-22'],
        ];
    }
}
