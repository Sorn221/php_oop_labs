<?php

namespace App;

    function getMidpoint(Point $point1, Point $point2):Point  {
        $midPoint = new Point();
        $midPoint->x = ($point1->x + $point2->x) / 2;
        $midPoint->y = ($point1->y + $point2->y) / 2;
        return $midPoint;
    }