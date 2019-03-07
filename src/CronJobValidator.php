<?php

namespace Dev\Raeder\Cron;

use Dev\Raeder\Cron\Exception\CronInvalidTimeException;

abstract class CronJobValidator
{

    /**
     * Validates the given CronJob
     *
     * @param CronJob $job
     * @return bool
     */
    public static function validate(CronJob $job): bool
    {
        self::validateTimes($job->getMinutes());
        self::validateTimes($job->getHours());
        self::validateTimes($job->getDays());
        self::validateTimes($job->getMonths());
        self::validateTimes($job->getDayOfWeeks());

        return true;
    }

    /**
     * @param array $times
     */
    public static function validateTimes(array $times): void
    {
        foreach ($times as $time) {
            if (count($times) > 1 && in_array('*', $time)) {
                throw new CronInvalidTimeException('Time specs. separated by commas cannot contain "*"');
            }
            if (count($time) > 1 && $time[0] >= $time[1]) {
                throw new CronInvalidTimeException('Time specs. contain invalid range');
            }
        }
    }

}
