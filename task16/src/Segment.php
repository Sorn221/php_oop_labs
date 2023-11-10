<?php
namespace App;

class Segment
{
    private Point $beginPoint;
    private Point $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function __toString(): string
    {
        return "[$this->beginPoint, $this->endPoint]";
    }
}