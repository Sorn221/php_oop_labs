<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    // BEGIN (write your solution here)
   
    // END

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}