<?php

namespace Dev\Raeder\Cron;

class CronJob
{

    /**
     * @var array
     */
    protected $minutes;

    /**
     * @var array
     */
    protected $hours;

    /**
     * @var array
     */
    protected $days;

    /**
     * @var array
     */
    protected $months;

    /**
     * @var array
     */
    protected $dayOfWeeks;

    /**
     * @var string
     */
    protected $command;

    /**
     * CronJob constructor.
     * @param array $minutes
     * @param array $hours
     * @param array $days
     * @param array $months
     * @param array $dayOfWeeks
     * @param string $command
     */
    public function __construct(array $minutes, array $hours, array $days, array $months, array $dayOfWeeks, string $command)
    {
        $this->minutes = $minutes;
        $this->hours = $hours;
        $this->days = $days;
        $this->months = $months;
        $this->dayOfWeeks = $dayOfWeeks;
        $this->command = $command;
    }

    /**
     * @return array
     */
    public function getMinutes(): array
    {
        return $this->minutes;
    }

    /**
     * @param array $minutes
     * @return CronJob
     */
    public function setMinutes(array $minutes): CronJob
    {
        $this->minutes = $minutes;
        return $this;
    }

    /**
     * @return array
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param array $hours
     * @return CronJob
     */
    public function setHours(array $hours): CronJob
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return array
     */
    public function getDays(): array
    {
        return $this->days;
    }

    /**
     * @param array $days
     * @return CronJob
     */
    public function setDays(array $days): CronJob
    {
        $this->days = $days;
        return $this;
    }

    /**
     * @return array
     */
    public function getMonths(): array
    {
        return $this->months;
    }

    /**
     * @param array $months
     * @return CronJob
     */
    public function setMonths(array $months): CronJob
    {
        $this->months = $months;
        return $this;
    }

    /**
     * @return array
     */
    public function getDayOfWeeks(): array
    {
        return $this->dayOfWeeks;
    }

    /**
     * @param array $dayOfWeeks
     * @return CronJob
     */
    public function setDayOfWeeks(array $dayOfWeeks): CronJob
    {
        $this->dayOfWeeks = $dayOfWeeks;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @param string $command
     * @return CronJob
     */
    public function setCommand(string $command): CronJob
    {
        $this->command = $command;
        return $this;
    }

}
