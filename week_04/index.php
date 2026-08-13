<!-- Q1 -->
<?php
// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400 ; // 0
echo "<br>";
?>

<!-- Q2 -->
<?php
$a = "10";

// 1
echo +$a;
echo "<br>";
echo gettype(+$a);
echo "<br>";

// 2
echo (int) $a;
echo "<br>";
echo gettype((int) $a);
echo "<br>";

// 3
echo $a + 0;
echo "<br>";
echo gettype($a + 0);
echo "<br>";

// 4 
echo intval($a);
echo "<br>";
echo gettype(intval($a));
echo "<br>";

// 5
$b = $a;
settype($b , "integer");
echo $b;
echo "<br>";
echo gettype($b);
echo "<br>";

// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

// // For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"
?>

<!-- Q3 -->
<?php
$a = 10;
$b = 20;

echo $a <=> $b;
echo "<br>";

echo gettype($a <=> $b);
echo "<br>";


// Needed Output
// -1
?>

<!-- Q4 -->
<?php
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c >  $a); // True
var_dump($a != $b); // True
var_dump($a !== $b); // True
var_dump($a <= $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True

echo "<br>";

?>

<!-- Q5 -->
<?php

$points = 10;

// Write Your Code Here
$points++;
$points++;
$points++;

echo $points; // 13

echo "<br>";

// Write Your Code Here
--$points;
--$points;
--$points;
--$points;
--$points;


echo $points; // 8;
echo "<br>";

?>


<!-- Q6 -->
<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = "{$a} {$b} {$c}";

// Method Three
$d = $a . " " . $b . " " . $c;

// Method Four
$d = sprintf("%s %s %s", $a, $b, $c);

echo $d; // Elzero Web School
echo "<br>";
?>

<!-- Q7 -->

<?php
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000
echo "<br>";

?>

<!-- Q8 -->
<?php

// Code 1
$a = $b;

// Code 2
$f = @file("Not_A_File") or die("Custom Error");

// Code 3
(@include("Not_A_File") or die("Custom Error"));
?>