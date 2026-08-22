<?php
// ============= Q1 =============
// Example
// 13
// 14
// 19
// 12
echo rand(11,19). "<br>";

// ============= Q2 =============
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// Example
// Ibrahim
// Ahmed

echo $friends[rand(0,count($friends) - 1)]. "<br>";

// ============= Q3 =============
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1,0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2,1) . "<br>";
echo round($num3,0,PHP_ROUND_HALF_DOWN) . "<br>";
// ============= Q4 =============
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )

echo "<pre>";
print_r(filter_list());
echo "</pre>";

$filter_ids = [];
for($i=0;$i<count(filter_list()); $i++) {
    array_push($filter_ids, filter_id(filter_list()[$i]));
}

echo "<pre>";
print_r($filter_ids);
echo "</pre>";

$new_array = array_combine($filter_ids, filter_list());

echo "<pre>";
print_r($new_array);
echo "</pre>";

// ============= Q5 =============
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"

echo filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>": "Not A Valid URL" . "<br>";
echo filter_var($url2, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>": "Not A Valid URL" . "<br>";
echo filter_var($url3, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>": "Not A Valid URL" . "<br>";
echo filter_var($url4, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>": "Not A Valid URL" . "<br>";


// ============= Q6 =============
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo str_replace([" ", "¥"], "", $url1) . "<br>";
echo str_replace([" ", "¥"], "", $url2) . "<br>";
echo str_replace([" ", "¥"], "", $url3) . "<br>";
echo str_replace([" ", "¥"], "", $url4) . "<br>";