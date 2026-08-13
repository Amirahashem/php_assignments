<!-- Q1 -->
 <?php $username = "Elzero Courses";?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $username; ?></title>
  </head>
  <body>
    <h1>Elzero Courses</h1>
    <p>Here In <?php echo $username; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username; ?></footer>
  </body>
</html>


<!-- Q2 -->
<?php
echo "===================================";
echo "<br>";

$name = "elzero";
$$name = "Web";

echo "${$name}";
echo "<br>";
echo $elzero;
echo "<br>";
echo "${elzero}";
echo "<br>";
echo $$name;
echo "<br>";
echo "$elzero";
echo "<br>";

echo "===================================";
echo "<br>";
?>

<!-- Q3 -->
<?php
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

echo "<br>";
echo "===================================";
echo "<br>";
?>

<!-- Q4 -->
<?php
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['SystemRoot'];
echo "<br>";

echo $_SERVER['OPENSSL_CONF'];
echo "<br>";

// "C:/xampp/htdocs"
// "localhost"
// "C:\WINDOWS"
// "C:/xampp/apache/bin/openssl.cnf"

echo "<br>";
echo "===================================";
echo "<br>";
?>

<!-- Q5 -->
<?php
/*
10 Words Here
if
else
elseif
while
for
function
class
return
public
private
*/
?>

<!-- Q6 -->
<?php
echo __LINE__;
echo "<br>";

echo __FILE__;
echo "<br>";

echo __DIR__;
echo "<br>";

// "60"
// "C:\xampp\htdocs\elzero\index.php"
// "C:\xampp\htdocs\elzero"

echo "<br>";
echo "===================================";
echo "<br>";
?>