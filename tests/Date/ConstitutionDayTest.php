<?php

namespace JGI\DanishDates\Tests\Date;

use JGI\DanishDates\Date\ConstitutionDay;
use JGI\SwedishDates\Tests\Date\AbstractDayTest;

class ConstitutionDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ConstitutionDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-06-05'],
            ['2018-06-05'],
            ['2019-06-05'],
            ['2020-06-05'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-06-04'],
            ['2019-06-06'],
            ['2020-05-06'],
            ['2020-05-05'],
        ];
    }
}
