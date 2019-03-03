<?php

namespace Dev\Raeder\Cron\Parser;

class CrontabParser
{

    protected $crontabRegex = '';

    /**
     * CrontabParser constructor.
     */
    public function __construct()
    {
        $this->crontabRegex = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'Cron.regexp');
    }

    public function parseCrontab(string $crontab): array
    {
        $jobs = preg_split('/\r?\n/', $crontab);
        foreach ($jobs as $job) {
            $data = [];
            preg_match('/' . $this->crontabRegex . '/mx', $job, $data);
            var_dump($data);
            die;
        }
    }


}
