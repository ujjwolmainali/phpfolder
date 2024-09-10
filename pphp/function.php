<?php

// function first()
// {
//   static $x = 2;
//   static $y = 4;
//   $x++;
//   $y++;
//   echo "the value of static function is ", $x;
//   echo "<br>";
//   echo "the value of function is ", $y;
//   echo "<br>";
// }
// first();
// first();
// first();
// first();
// function ujjwol($a, $b) //parameter
// {
//   $s = $a + $b;
//   return $s;
// }
// $x = ujjwol(5, 6); //argument
// echo "the value of x is $x";

// $ujjwol = function ($x, $y) {
//   $s = $x + $y;
//   return $s;
// };
// echo $ujjwol(20, 30);
date_default_timezone_set('asia/kathmandu');
$d = date("d s f y,g::A");
echo "today is $d<br>";
