<?php
// ================= Q1 ==============
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

echo "<pre>";
print_r(array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true));
echo "</pre>";

// Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )

// ================= Q2 ==============
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>";
print_r(array_change_key_case(array_combine($codes, $means), CASE_LOWER));
echo "</pre>";

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )

// ================= Q3 ==============
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo "<pre>";
print_r(array_change_key_case(array_flip($friends), CASE_LOWER));
echo "</pre>";

// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )

// ================= Q4 ==============
$nums = [10, 20, 30];

// [1]
echo array_reduce($nums, fn($acc, $current) => $acc + $current) . "<br>";


// [2]
echo array_sum($nums) ."<br>";

// Output
// 60
// 60


// ================= Q5 ==============
$nums = [5, 10, 20, 5, 30, 40];

// Output
// 100

echo "<pre>";
print_r(array_filter($nums, fn($num) => $num !== 5));
echo "</pre";

$nums_after_filter = array_filter($nums, fn($num) => $num !== 5);

echo "<pre>";
print_r(array_reduce($nums_after_filter, fn($acc, $current) => $acc + $current));
echo "</pre>";

// ================= Q6 ==============
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "<pre>";
print_r(array_pad($chars, count($chars) * strlen($char), $char[$zero]));
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )

// ================= Q7 ==============
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
// echo current($names) . "<br>";
next($names);

// Write Line Here
next($names);

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);
echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);
echo current($names) . "<br>"; // "Osama"

// Write Line Here
next($names);
next($names);
next($names);
// Write Line Here

echo current($names) . "<br>"; // "Mahmoud"


// ================= Q8 ==============
$chars = ["A", "B", "C"];

// [1]
// $chars[] = "D";

// [2]
// array_push($chars, "D");

// [3]
// $chars[count($chars)] = "D";

// [4]
$chars[3] = "D";

echo "<pre>";
print_r($chars);
echo "</pre>";

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )

// ================= Q9 ==============
$nums = [1, 2, 3, 4, 5, 6];

echo "<pre>";
print_r(array_slice($nums, -5, -2));
echo "</pre>";

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )

// ================= Q10 ==============
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
$result = array_merge(array_filter($mix, fn($num) => gettype($num) !== "string"), $nums);

sort($result);

echo "<pre>";
print_r($result);
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )

// ================= Q11 ==============
$arr = ["A", "B", "C", "D", "E"];

// Output
// 5
$counter = 0;
foreach ($arr as $item) {
    $counter += 1;
};

echo "$counter <br>";

// ================= Q12 ==============
$nums = [11, 2, 10, 7, 20, 50];

// Output
// 100

$result = 0;
foreach($nums as $num) {
    $result += $num;
};

echo $result . "<br>";

// ================= Q13 ==============

$nums = [10, 100, -20, 50, 30];

$result = 0;

for($i=0; $i<count($nums) ; $i++) {
    if($result < $nums[$i]){
        $result = $nums[$i];
    };
};

echo $result . "<br>";
// Output
// 100


// ================= Q14 ==============
$nums = [10, 100, -20, 50, 30];

// Output
// -20

$result = 0;
for($i=0; $i<count($nums); $i++) {
    if($nums[$i] < $result) {
        $result = $nums[$i];
    };
};

echo "$result <br>";

// ================= Q15 ==============

$chars = ["o", "r", "e", "z", "l", "E"];

// Output
// "Elzero"

$result = "";
for($i=5; $i>=0; $i--) {
    $result .= $chars[$i];
};
echo $result . "<br>";

// ================= Q16 ==============
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )

echo "<pre>";
print_r(array_filter($mix, fn($num) => gettype($num) !== "string" && $num % 2 !== 0));
echo "</pre>";

// ================= Q17 ==============

$nums = [1, 2, 3, 4, 5, 6];
// echo "<pre>";
// print_r($nums);
// echo "</pre>";


$new_array = [];
$count = count($nums);

for($i=0; $i<$count; $i++){
    $rand_num = array_rand($nums);
    array_push($new_array, $nums[$rand_num]);
    unset($nums[$rand_num]);
}

echo "<pre>";
print_r($new_array);
echo "</pre>";

// for($i=0; $i< count($nums); $i++) {
     
// }

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )

// ================= Q18 ==============
$title = "E&z\$r0 W\$b Sch00&";

// Output
// "Elzero Web School"
// 7

$str_array = str_split($title);
$array_after_cleaning = array_map(fn($str) => $str === "&" ? "l" : ($str === "$" ? "e" : ($str === "0" ? "o" : $str)), $str_array);

// echo "<pre>";
// print_r(array_reduce($array_after_cleaning, fn($acc, $current) => $acc . $current));
// echo "</pre>";

echo array_reduce($array_after_cleaning, fn($acc, $current) => $acc . $current);
?>