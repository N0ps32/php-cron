<?php

namespace Dev\Raeder\Cron\Scheduler;

use Dev\Raeder\Cron\CronExecutionResult;

class ProgrammaticScheduler extends AbstractScheduler
{

    public function execute(array $metadata): CronExecutionResult
    {
        return null;
    }

}
