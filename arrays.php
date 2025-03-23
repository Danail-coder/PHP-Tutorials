<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $fruits = [
        "Apple", //0
        "Banana", //1
        "Cherry"//2
    ];

    $fruits[] = "Soursap";

    //array_splice($fruits, 0, 1);

    echo $fruits[1];
    echo "<br>";
    print_r($fruits);
    echo "<br>";

    $tasks = [
        "supervisor" => "Daniel",
        "laundry" => "Richmond",
        "cleaning" => "Michael" ,
        "scrubbing" => "Innocent"
    ];

    print_r($tasks);
    echo "<br>";

    echo $tasks["supervisor"];
    echo "<br>";

    echo count($tasks);
    echo "<br>";

    echo count($fruits);
    echo "<br>";

    sort($tasks);
    print_r($tasks);
    echo "<br>";

    array_push($fruits, "Mango");
    print_r($fruits);

    $tasks["dusting"] = "Vincent";
    print_r($tasks);
    echo "<br>";

    array_splice($fruits, 2 , 0, "Pineapple");
    print_r($fruits);
    ?>
</body>
</html>