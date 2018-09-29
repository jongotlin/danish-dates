<?php

namespace JGI\DanishDates\Tests\Date;

use JGI\DanishDates\Date\Shrovetide;
use JGI\SwedishDates\Tests\Date\AbstractDayTest;

class ShrovetideTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new Shrovetide();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-02-26'],
            ['2018-02-11'],
            ['2019-03-03'],
            ['2020-02-23'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-02-27'],
            ['2018-02-12'],
            ['2019-03-04'],
            ['2020-02-22'],
        ];
    }
}
