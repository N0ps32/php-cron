<?php

namespace Dev\Raeder\Cron\ScheduleVerification;

use Dev\Raeder\Cron\CronJob;

abstract class AbstractScheduleVerifier implements ScheduleVerificationInterface
{

    public function getJobHash(CronJob $job)
    {
        $json = json_encode([
            $job->getMinutes(),
            $job->getHours(),
            $job->getDays(),
            $job->getMonths(),
            $job->getDayOfWeeks(),
            $job->getCommand()
        ]);
        
        return hash('sha256', $json);
    }

}
