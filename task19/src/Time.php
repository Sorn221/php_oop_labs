<?php
namespace App;

class Time
{
    private $h;
    private $m;

    // BEGIN (write your solution here)
    public static function fromString(string $time): Time
    {
        return new self(Time());
    }
    // END

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
}