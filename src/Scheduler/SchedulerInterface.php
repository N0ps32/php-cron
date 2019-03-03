<?php

namespace Dev\Raeder\Cron\Scheduler;

use Dev\Raeder\Cron\CronExecutionResult;
use Dev\Raeder\Cron\CronJob;
use Dev\Raeder\Cron\Exception\CronExecutionException;
use Dev\Raeder\Cron\Exception\CronParseException;

interface SchedulerInterface
{

    /**
     * @param array $metadata
     * @throws CronExecutionException
     * @return CronExecutionResult
     */
    public function execute(array $metadata): CronExecutionResult;

    /**
     * @param CronJob[] $jobs
     */
    public function schedule(array $jobs): void;

    /**
     * @param string $crontab
     * @throws CronParseException
     */
    public function scheduleCrontab(string $crontab): void;

}
