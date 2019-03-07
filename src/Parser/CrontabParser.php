<?php

namespace Dev\Raeder\Cron\Parser;

use Dev\Raeder\Cron\CronJob;
use Dev\Raeder\Cron\CronJobValidator;
use Dev\Raeder\Cron\Exception\CronParseException;

class CrontabParser
{

    protected $crontabRegex;

    /**
     * CrontabParser constructor.
     */
    public function __construct()
    {
        $this->crontabRegex = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'Cron.regexp');
    }

    /**
     * Parses cronjob ranges like 12,14-16,23
     *
     * @param $str
     * @return array
     */
    public function parseRanges(string $str): array
    {
        $ranges = explode(',', $str);
        return array_map(function ($range) {
            return array_map(function ($n) {
                return intval($n);
            }, explode('-', $range));
        }, $ranges);
    }

    /**
     * Parses a crontab file
     *
     * @param string $crontab
     * @return array
     */
    public function parseCrontab(string $crontab): array
    {
        $jobs = preg_split('/\r?\n/', $crontab);
        $convertedJobs = array_map(function ($job) {
            $data = [];
            if (!preg_match('/' . $this->crontabRegex . '/mx', $job, $data)) {
                throw new CronParseException("Failed to parse job $job");
            }

            return new CronJob(
                $this->parseRanges($data['minutes']),
                $this->parseRanges($data['hours']),
                $this->parseRanges($data['days']),
                $this->parseRanges($data['months']),
                $this->parseRanges($data['dayOfWeek']),
                $data['command']
            );
        }, $jobs);

        foreach ($convertedJobs as $job) {
            CronJobValidator::validate($job);
        }

        return $convertedJobs;
    }


}
