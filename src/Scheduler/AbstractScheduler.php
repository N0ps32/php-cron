<?php

namespace Dev\Raeder\Cron\Scheduler;

use Dev\Raeder\Cron\CronExecutionResult;
use Dev\Raeder\Cron\Parser\CrontabParser;

abstract class AbstractScheduler implements SchedulerInterface
{

    protected $jobs = [];

    protected $parser;

    /**
     * {@inheritdoc}
     */
    public abstract function execute(array $metadata): CronExecutionResult;

    /**
     * {@inheritdoc}
     */
    public function schedule(array $jobs): void
    {
        $this->jobs = array_merge($this->jobs, $jobs);
    }

    /**
     * {@inheritdoc}
     */
    public function scheduleCrontab(string $crontab): void
    {
        if ($this->parser === null) {
            $this->parser = new CrontabParser();
        }

        $jobs = $this->parser->parseCrontab($crontab);
        var_dump($jobs);
        die;
    }

}
