<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    //String Operator
    $a = "Hello";
    $b = "World";
    
    $c = $a . " " . $b;
    echo $c;
    
    echo "<br>";
    
    //Arithmetic Operators
    $a = 4;
    $b = 7;
    
    $c = $a + $b;
    echo $c;
    echo "<br>";
    $c = $a - $b;
    echo $c;
    echo "<br>";
    $c = $a / $b;
    echo $c;
    echo "<br>";
    $c = $a * $b;
    echo $c;
    echo "<br>";
    $c = $a % $b;
    echo $c;
    echo "<br>";

    //Comparison Operators
    $a = 6;
    $b = 7;
    
    if ($a === $b) {
        echo "This statement is True";
    }
    else{
        echo "This statement is False";
    }
    echo "<br>";
    if ($a <= $b) {
        echo "This statement is True";
    }
    else{
        echo "This statement is False";
    }
    echo "<br>";
    /*Other Comparison Operators 
    $a >= $b
    $a > $b;
    $a <$b;
    $a !== $b;
    */

    //Logical Operators
    $a = 6;
    $b = 7;
    
    if ($a === $b || $a >= $b) {
        echo "This is True";
    }
    else{
        echo "This is False";
    }
    echo "<br>";
    if ($a !== $b && $a < $b) {
        echo "This is True";
    }
    else{
        echo "This is False";
    }
    echo "<br>";
    
    //Increment Operators
    $a = 2;
    
    echo ++$a;
    echo "<br>";
    echo $a++;
    echo "<br>";
    //Decrement Operators
    $a = 6;
    
    echo --$a;
    echo "<br>";
    echo $a--;
    
    ?>
</body>
</html>