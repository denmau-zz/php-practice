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
    $fistname = "Emobilis";
    $secondname = "practice";

    echo "Hi, my name is ".$fistname." ".$secondname;

    $yearofbirth = 2000;
    $currentyear = 2021;
    $age = $currentyear - $yearofbirth;

    echo "<br>";

    echo "and am ".$currentyear - $yearofbirth." years old.";
    echo "<br>";
    echo "age before iteration " . $age;

    // age-- -> age = age - 1
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //ag = 21

    echo "prefix age " . ++$age; // add 1 to age and then print
    echo "<br>";
    echo "post fix age " . $age++; // print then add 1 to age
    echo "<br>";
    echo "value of age" . ($age);
    echo "<br>";
    echo "value age " . $age;
    // age--

    // ++$age













?>

</body>
</html>