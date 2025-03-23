<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    /*
    For Loop
    While Loop
    Do-whlie Loop
    Foreach Loop
    */

    $test = 15;
    for($i = 0; $i <= $test; $i++) {
        echo "The arrangement is " . $i . "<br>";
    }
    echo "<br>";

    while($test <= 15) {
        echo $test;
        $test++;
    }
    echo "<br>";

    do{
        echo $test;
        $test++;
    }
    while($test < 15);
    echo "<br>";

    $fruits = [
        "Apple", //0
        "Banana", //1
        "Cherry"//2
    ];
    foreach($fruits as $fruit) {
        echo $fruits[0];
        echo "<br>";
        echo $fruits[1];
        echo "<br>";
        echo $fruits[2];
        echo "<br>";

        echo "This is a " . $fruit . "<br>";
    }
    ?>
</body>
</html>