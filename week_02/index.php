<!-- Q1 -->
<?php
echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo "<br>";
?>

<!-- Q2 -->
 <?php
//  100

// Method One
echo gettype(100);
echo "<br>";
// Method Two
var_dump(100);
echo "<br>";
// Method Three => Optional
echo is_int(100) ? "Integer" : "Not Integer";
echo "<br>";
?>

<!-- Q3 -->
<?php
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo "<br>";
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>

<!-- Q4 -->
<?php
echo nl2br(
"We
Love
Elzero
Web
School"
);
echo "<br>";
// Needed Output
// We
// Love
// Elzero
// Web
// School
?>

<!-- Q5 -->
<?php
echo nl2br(<<<'text'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
text); 
echo "<br>";
// Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
?>

<!-- Q6 -->
<?php
$something = "Programming";

echo <<<code
Hello \\PHP\\
We Love $something
code;
echo "<br>";

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
?>

<!-- Q7 -->
<?php
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");
echo '<br>';
// Needed Output
// 1
// integer
?>

<!-- Q8 -->
<?php
echo "<pre>";
print_r([
    "FrontEnd" => [
        "0" => "HTML",
        "1" => "CSS",
        "JS" => [
            "Vuejs" => [
                "2" => "v2",
                "3" => "v3"
            ],
            "0" => "Reactjs",
            "1" => "Svelte"
        ]
    ],
    "BackEnd" => [
        "0" => "PHP",
        "1" => "MySql",
        "2" => "Security"
    ],
    "0" => "Git",
    "1" => "Github",
    "Testing" => [
        "0" => "Unit Testing",
        "1" => "End to End",
        "2" => "Integration"
    ]
]);
echo "</pre>"
// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )
?>