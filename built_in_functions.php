<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-In Functions</title>
</head>
<body>
    <?php
    $string = "Danail Juniore";
    echo $string;
    echo "<br>";
    echo strtolower($string);
    //echo strien($string); Number of Characters
    //echo strpos($string); Position of Characters
    //echo str_replace("Daniel", "Danail", $string); To replace a data with another data
    //echo count($array); Number of data in an array
    //echo is_array($array); Whether it is an array or not
    //array_push($array, "kiwi"); To add data to an array
    //array_reverse($array); Change the position of data in an array
    //array_pop($array); Remove data from an array
    //array_merge($array); Merge two different arrays into one
    echo "<br>";
    echo substr($string, 2, -2);
    echo "<br>";
    print_r (explode(" ",$string));
    echo "<br>";

    $number = -5.5;
    echo abs($number);
    echo "<br>";
    echo pow(2,3);
    echo "<br>";
    echo sqrt(16);
    echo "<br>";
    echo rand(1, 100);
    echo "<br>";

    echo date("Y-m-d H:i:s");
    echo "<br>";

    echo time();
    echo "<br>";

    
    ?>
    
</body>
</html>