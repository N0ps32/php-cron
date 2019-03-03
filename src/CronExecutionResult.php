<?php

namespace Dev\Raeder\Cron;

class CronExecutionResult
{

    protected $result;

    /**
     * CronExecutionResult constructor.
     * @param $result
     */
    public function __construct($result)
    {
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     * @return CronExecutionResult
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

}
