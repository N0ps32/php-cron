<?php

namespace Dev\Raeder\Cron;

abstract class CronJob
{

    public abstract function execute(): ?array;

}
