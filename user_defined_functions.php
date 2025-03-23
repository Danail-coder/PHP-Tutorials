<?php
declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Defined Functions</title>
</head>
<body>

    <?php
    function sayHello()
    {
        return "Hello Danail";
    }

    echo sayHello();

    echo "<br>";

    function Hello(string $name)
    {
        return "Hello" . " " . $name . "!";
    }

    $test = Hello("Michael");
    echo $test;

    echo "<br>";
    ?>

</body>
</html>