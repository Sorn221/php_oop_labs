<?php
namespace App;

class Segment 
{
    public Point $beginPoint;
    public Point $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}