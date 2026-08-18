<?php
// ============== Q1 ============
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str =  str_replace([$str[(int) $num_two],$str[-1]],[$let_two,$let_one], $str);

echo $str . "<br>"; // Elzero

// ==============================
// ============== Q2 ============

$str = "Orezle";

// Elzero
echo ucfirst(strrev(lcfirst($str))) . "<br>" ;

// ==============================
// ============== Q3 ============

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(strtolower($str) . $char,3) . "<br>";

// aaa_aaa_aaa_

// ==============================
// ============== Q4 ============

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>") . "<br>";
// <b>Elzero</b>

// ==============================
// ============== Q5 ============

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
echo substr_count($str, $e , $four) . "<br>";

// 2
echo substr_count($str, lcfirst($o),-$four) . "<br>";

// ==============================
// ============== Q6 ============

$chars = ["E", "l", "z", "e", "r", "o"];

// Output
// "Elzero"

echo implode("",$chars) . "<br>";

// ==============================
// ============== Q7 ============

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
// "Elzero"

$str = "";
foreach ($chars as $char) {
    if (gettype($char) === "integer") continue;
    $str .= $char;
}
// echo $str;
echo ucfirst(strtolower($str)). "<br>";


?>