<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = 3600;
    private int $secondsCount = 0;

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }

    public function __construct(int $seconds, int $mins = 0, int $hours = 0)
    {
        $this->secondsCount = $seconds + $mins * $this::SEC_PER_MIN + $hours * $this::SEC_PER_HOUR;
    }
}