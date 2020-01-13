<?php

use Eluceo\iCal\Component\Calendar;
use Eluceo\iCal\Component\Event;

require __DIR__ . '/vendor/autoload.php';

/**
 * @return Generator|\DateTimeImmutable[]
 */
function generateDates()
{
    $weekdays = [
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
    ];
    $dtz = new \DateTimeZone('Europe/Berlin');

    foreach (range(1, 12) as $month) {
        $time = sprintf("third %s 2020-%s", $weekdays[($month - 1 ) % 4], $month);
        yield new \DateTimeImmutable($time, $dtz);
    }
}

/**
 * @param iterable|DateTimeImmutable[] $dates
 * @return Generator|Event[]
 */
function generateEvents(iterable $dates): Generator
{
    foreach ($dates as $date) {
        yield (new Event())
            ->setDtStart($date->setTime(19, 00))
            ->setDtEnd($date->setTime(22, 00))
            ->setNoTime(false)
            ->setSummary('PHP-Usergroup Münster')
            ->setUseTimezone(true)
        ;
    }
}

$vCalendar = new Calendar('phpugms.github.io');
foreach (generateEvents(generateDates()) as $event) {
    $vCalendar->addComponent($event);
}

$tz = new \Eluceo\iCal\Component\Timezone('Europe/Berlin');
$vCalendar->setTimezone($tz);

echo $vCalendar->render();
