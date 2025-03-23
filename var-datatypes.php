<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Data Types</title>
</head>
<body>
    <p>This is an <?php echo "awesome" ?> paragraph</p>
    <?php
    echo "This is also a paragraph.<br>";

    $name = "Danail Juniore";
    echo $name;
    echo "<br>";

    //Data types
    //Scalar Types(Contains one value only)
    $string = "Danail Juniore";
    echo $string;

    echo "<br>";

    $int = 18;
    echo $int;

    echo "<br>";

    $float = 2.006;
    echo $float;

    echo "<br>";

    $bool = false;
    echo $bool;

    //Array Types(Contains multiple values)
    $array = ["Danail", "Juniore", 18.2006];
    ?>

    <p>My name is <?php echo $name;?>. I am <?php echo $int;?> years old. And i am learning PHP.</p>
</body>
</html>