<?php
namespace App;
function reverse(Segment $segment) : Segment
{
    $newBeginPoint = new Point($segment->endPoint->x, $segment->endPoint->y);
    $newEndPoint = new Point($segment->beginPoint->x, $segment->beginPoint->y);

    return new Segment($newBeginPoint, $newEndPoint);
}