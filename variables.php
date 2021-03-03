<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Variables</title>
</head>
<body>

<?php
    $Firstname = "Dennis";
    $Secondname = "Kamau";

    $num1 = 30;
    $num2 = 74;

    echo $Firstname;
    echo "<br>";
    echo $Secondname;
    echo "<br>";
    echo  $num1;
    echo "<br>";
    echo $num2;
    echo "<br>";
    echo "Addition of $num1 & $num2 yields " . ($num1 + $num2);
    echo "<br>";
    echo "Multiplication of $num1 & $num2 yields " . ($num1 * $num2);
    echo "<br>";
    echo "Division of $num1 & $num2 yields " . ($num1 / $num2);
    echo "<br>";
    echo "Subtraction of $num1 & $num2 yields " . ($num1 - $num2);


?>

</body>
</html>