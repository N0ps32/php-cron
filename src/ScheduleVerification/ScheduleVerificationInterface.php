<?php

namespace Dev\Raeder\Cron\ScheduleVerification;

use Dev\Raeder\Cron\CronJob;

interface ScheduleVerificationInterface
{

    public function hasJobRun(CronJob $job): bool;

    public function markJobAsRun(CronJob $job);

    public function markJobAsFailed(CronJob $job);

}
