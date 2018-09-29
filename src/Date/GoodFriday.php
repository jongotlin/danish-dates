<?php declare (strict_types=1);

namespace JGI\DanishDates\Date;

class GoodFriday extends \JGI\SwedishDates\Date\GoodFriday
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Langfredag';
    }
}
