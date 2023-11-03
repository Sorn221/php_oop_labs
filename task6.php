<?php

/* Функция gcd находит наибольший общий делитель двух чисел
*/
function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}
/* Функция RatToString возвращает строковое представление числа
  (используется для отладки)
*/
function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

function makeRational ($a, $b)
{
    $gcd = gcd($a, $b);
    $a = $a / $gcd;
    $b = $b / $gcd;

    if($b < 0){
        $a = -$a;
        $b = -$b;
    }

    return[
      'number' => $a,
      'denom' => $b,  
    ];
}

function getNumer($rational){
    return $rational['number'];
}

function getDenom($rational){
    return $rational['denom'];
}

function add($rat1, $rat2){
    
    $d1 = getDenom($rat1);
    $d2 = getDenom($rat2);

    return makeRational(getNumer($rat1)* $d2 + getNumer($rat2)* $d1, $d1 * $d2);
}

function sub($rat1, $rat2){
    $d1 = getDenom($rat1);
    $d2 = getDenom($rat2);
    return makeRational(getNumer($rat1)* $d2 - getNumer($rat2)* $d1, $d1 * $d2);
}

$rat1 = makeRational(3, 9);
print ratToString($rat1)."<br>";
$rat2 = makeRational(10, 3);
print ratToString(add($rat1, $rat2))."<br>";
print ratToString(sub($rat1, $rat2))."<br>";
$rat3 = makeRational(-4, 16);
print ratToString($rat3)."<br>";
$rat4 = makeRational(12, 5);
print ratToString(add($rat3, $rat4))."<br>";
print ratToString(sub($rat3, $rat4))."<br>";
$rat5 = makeRational(3, -9);
print ratToString($rat5)."<br>";