<?php
    require_once("point.php");
    require_once("PointFunctions.php");
//Тест1
    $point1 = new Point();
    $point1->x = 2;
    $point1->y = 11;
    $point2 = new Point();
    $point2->x = 11;
    $point2->y = 2;
    
    $midpoint = getMidpoint($point1, $point2);
    print_r("x = $midpoint->x, y =  $midpoint->y");
    print_r('<br/>');
//Тест2
    $point1->x = 5;
    $point1->y = 4;
    
    $point2->x = 7;
    $point2->y = 6;
    
    $midpoint = getMidpoint($point1, $point2);
    print_r("x = $midpoint->x, y =  $midpoint->y");
    print_r('<br/>');
//Тест3  
    $point1->x = 4;
    $point1->y = 2;
    
    $point2->x = 2;
    $point2->y = 8;
    
    $midpoint = getMidpoint($point1, $point2);
    print_r("x = $midpoint->x, y =  $midpoint->y");
    print_r('<br/>');