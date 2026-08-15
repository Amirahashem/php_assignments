<?php
// ============ Q1 ===========

// Write Function Content Here
function greeting($name, $gender = "") {
    if ($gender === "") {
        return "Hello $name <br>";
    }else {
        if ($gender === "Male") {
            return "Hello Mr $name <br>";
        }
        if ($gender === "Female") {
            return "Hello Miss $name <br>";
        }
    }
};


// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


echo "======================== <br>";
// ============ Q2 ===========
// [1]

// Write Function Content Here
// function get_arguments(...$args) {
//     $str = "";
//     foreach ($args as $arg) {
//         $str .= "$arg ";
//     }
//     return $str . "<br>";
// }

// [2]
function get_arguments() {
    $str = "";
    foreach (func_get_args() as $arg):
        $str .= "$arg ";
    endforeach;

    return $str . "<br>";
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


echo "======================== <br>";
// ============ Q3 ===========

// Write Function Content Here
function sum_all(...$nums) {
    $result = 0;
    foreach ($nums as $num) {
        if ($num === 5) continue;

        if ($num === 10) {
            $num = 20;
            $result += $num;
        }else {
            $result += $num;
        }
    }
    return $result . "<br>";
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40


echo "======================== <br>";
// ============ Q4 ===========

// Write Function Content Here

function multiply(...$nums) {
    $result = 1;
    foreach($nums as $num):
        if(gettype($num) === "string") continue;
        $result *= (int) $num;
    endforeach;

    return $result . "<br>";
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

echo "======================== <br>";
// ============ Q5 ===========

function check_status($a, $b, $c) {
  // Function Code Here
  $str = gettype($a) === "string" 
            ? $a
            : (gettype($b) === "string" ? $b : $c);

   $number = gettype($a) === "integer"
              ? $a
              : (gettype($b) === "integer" ? $b : $c);
    
    $bool = gettype($a) === "boolean"    
            ? $a
            : (gettype($b) === "boolean" ? $b : $c); 

    return "Hello $str, Your Age Is $number, You Are " . ($bool == 1 ? "" : "Not ") . "Available For Hire <br>";
}


// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo "======================== <br>";
// ============ Q6 ===========

// Write Function Content Here
// function calculate($num1, $num2, $operation = "a") {
//     if($operation === "a" || $operation === "add") {
//         return $num1 + $num2 . "<br>";
//     }elseif ($operation === "s" || $operation === "subtract") {
//         return $num1 - $num2 . "<br>";
//     }elseif ($operation === "m" || $operation === "multiply") {
//         return $num1 * $num2 . "<br>";
//     }else {
//         return "This operation does not exist. <br>";
//     }
// }

// // Needed Output
// echo calculate(10, 20); // 30
// echo calculate(10, 20, "a"); // 30
// echo calculate(10, 20, "s"); // -10
// echo calculate(10, 20, "subtract"); // -10
// echo calculate(10, 20, "multiply"); // 200
// echo calculate(10, 20, "m"); // 200


echo "======================== <br>";
// ============ Q7 ===========

function calculate(int $num_one, int $num_two) {
  return (float) ($num_one + $num_two);
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double


echo "======================== <br>";
// ============ Q8 ===========

$message = "Hello";

// Write Your Code Here
$Hello = function($name) use ($message){
    return $message . " " . $name . "<br>";
};

echo $Hello("Osama"); // Hello Osama

echo "======================== <br>";
// ============ Q9 ===========

// Write Function Content Here
//[1] Anonymous Function
// $greet = function($name) {
//     return "Greetings";
// }

// [2]  Arrow Function Syntax

$greet = fn($name) => "Greetings";
// Needed Output
echo $greet("Osama"); // Greetings
?>