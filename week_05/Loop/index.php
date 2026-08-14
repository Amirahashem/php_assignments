<!-- Q1 -->
<?php
$index = 10;

while($index > 0) {
    echo $index;
    echo "<br>";
    $index--;
}
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1
?>

<?php echo "======================== <br>"?>
<!-- Q2 -->
<?php
$index = 0;

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

// [1]
// while($index < 20) {
//     $index +=2;
//     echo $index . "<br>";
// }

// [2]
// do {
//     $index +=2;
//     echo $index . "<br>";
// }while ($index < 20);

// [3]

for(;$index < 20; ) {
    $index+=2;
    echo $index . "<br>";
};
?>

<?php echo "======================== <br>"?>

<!-- Q3 -->
<?php
$num = 2;
--$num;
while ($num < 520) {
  // Your Code Here
  echo $num . "<br>";
   $num = ($num * 2) + 2;

}

// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

?>

<?php echo "======================== <br>"?>

<!-- Q4 -->
<?php
$start = 10;
$end = 0;
$stop = 3;

for ($start ; $start > $end; $start--) {
    echo $start < 10 ? "0{$start}" : $start;
    echo "<br>";
    if ($start == $stop) break;

}
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03

?>

<?php echo "======================== <br>"?>

<!-- Q5 -->
<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for (++$start; $start < count($mix); $start++) {
    if (gettype($mix[$start]) === "integer") {
        echo $mix[$start] . "<br>";
    }

}
// Output
// 2
// 3
// 4
?>

<!-- Q6 -->
<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

foreach ($money as $name => $salary) {
    echo "The Name Is {$name} And I Need {$salary} Pound From Him <br>";
};
?>

<!-- Q7 -->
<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$int_num = 0;
$str_num = 0;

for ($index = 0; $index < count($mix); $index++) {
    if (gettype($mix[$index]) === "integer") {
        $int_num++;
        echo $mix[$index] . "<br>";
    }else {
        $str_num++;
    }
}

echo "{$int_num} Numbers Printed <br>";
echo "{$str_num} Letters Ignored <br>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
?>

<!-- Q8 -->
<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
// 6
// 10
// 15

for($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] % 2 === 0) {
        echo $nums[$i] / 2 . "<br>";
    }
}
?>

<!-- Q9 -->
<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// Output
// "Sayed"
// "Osama"

for (--$help_num; $help_num >= 1; $help_num--) {
    echo $names[$help_num] . "<br>";
}
?>

<!-- Q10 -->
<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $index => $value) {
    echo "{$value} + {$nums[$help_num - $index]}  = " . $value + $nums[$help_num - $index] . "<br>";
}
// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
?>