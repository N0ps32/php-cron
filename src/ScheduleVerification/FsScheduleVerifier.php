<?php

namespace Dev\Raeder\Cron\ScheduleVerification;

use Dev\Raeder\Cron\CronJob;

class FsScheduleVerifier extends AbstractScheduleVerifier
{

    protected $dataDir;

    /**
     * FsScheduleVerifier constructor.
     * @param string $dataDir
     */
    public function __construct(string $dataDir)
    {
        if (!file_exists($dataDir) && !mkdir($dataDir, 0777, true)) {
            throw new \InvalidArgumentException("Unable to create directory: $dataDir");
        }
        if (!is_writable($dataDir)) {
            throw new \InvalidArgumentException("Given data directory is not writable: $dataDir");
        }
        $this->dataDir = $dataDir;
    }

    /**
     * @param CronJob $job
     * @return bool
     */
    public function hasJobRun(CronJob $job): bool
    {
        // TODO: Implement hasJobRun() method.
    }

    /**
     * @param CronJob $job
     * @return mixed
     */
    public function markJobAsRun(CronJob $job)
    {
        // TODO: Implement markJobAsRun() method.
    }

    /**
     * @param CronJob $job
     * @return mixed
     */
    public function markJobAsFailed(CronJob $job)
    {
        // TODO: Implement markJobAsFailed() method.
    }
}
