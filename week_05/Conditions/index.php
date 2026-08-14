<!-- Q1 --> 
<?php 
$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

// "Yes"

if ($b > $a && $a === $c && ($a + $c) == $b) {
    echo "Yes";
    echo "<br>";
}
?>

<!-- Q2 -->
<?php 

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C

if ($a > $b) {
    echo "A Is Larger Than B";
    echo "<br>";
}elseif ($a > $c) {
    echo "A Is Larger Than C";
    echo "<br>";
} else {
    echo "A Is Not Larger Than B Or C";
    echo "<br>";
}
?>

<!-- Q3 -->
<?php
$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"

if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "The Request Method Is Post And Username Is " . $_POST['user'];

    foreach ($admins as $admin) {
        if ($_POST['user'] == $admin) {
            echo "This Username {$_POST['user']} Is Admin";
        }
    }
}
?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<!-- Q4 -->
<?php

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}

// Output
// "B + C = A"

// echo $a + $b === $c ? "A + B = C" : $a + $c === $b ? "B + C = A" : "The End";
echo $a + $b === $c
    ? "A + B = C"
    : ($a + $c === $b ? "B + C = A" : "The End");

?>

<!-- Q5 -->
<?php 
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
} 
?>

<!-- Q6 -->
<?php 
$genre = "Hack And Slash";

if ($genre === "RPG") {

  echo "I Recommend Ys Games";

} elseif ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {

  echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

  echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";

} else {

  echo "I Recommend Shadow Of Mordor And Shadow Of War";

}

// Needed Output
// "I Recommend Castlevania Games"

switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";


}
?>

<!-- Q7 -->
<?php 
$num_one = 23;
$num_two = 5;
$op = "+";

switch ($op) {
    case "+":
        echo $num_one + $num_two;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "*":
        echo $num_one * $num_two;
        break;
    case "/":
        echo (int) $num_one / $num_two;
        echo $num_one % $num_two;
        break;
    default:
        echo "Unknown Operation";
}
?>

<!-- Q8 -->
<?php
$day = "Sat";

switch($day) {
  case "Sat":
  case "Sun":
  case "Mon":
    echo "We Are Open All The Day";
    break;
  case "Tue":
  case "Wed":
    echo "We Are Open From 08:12";
    break;
  case "Thu":
  case "Fri":
    echo "We Are Closed";
    break;
  default:
    echo "Unknown Day";
}

if ($day === "Sat" || $day === "Sun" || $day === "Mon") {
    echo "We Are Open All The Day";
}elseif ($day === "Tue" || $day === "Wed") {
    echo "We Are Open From 08:12";
}elseif ($day === "Thu" || $day === "Fri") {
    echo "We Are Closed";
}else {
     echo "Unknown Day";
}
?>

