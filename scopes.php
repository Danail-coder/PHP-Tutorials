<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    <?php
    /*Types of Scopes
    Global Scopes
    Local Scopes
    Class Scopes
    Static Scopes
    */

    $name = "Danail Juniore";//Global Variable
    echo $name;

    echo "<br>";

    $mname = "Juniore";
    
    function myFunction()
    {
        $test = "Hellsing Ultimate"; //Local Variable

        return $GLOBALS["mname"];
    }

    echo myFunction();

    echo "<br>";

    function miFunction() 
    {
        static $num = 0; //Static Variable

        $num++;

        return $num;
    }

    echo miFunction();
    echo "<br>";
    echo miFunction();
    echo "<br>";
    echo miFunction();

    echo "<br>";

    class MyClass
    {
        public $main = "Danail Ultimate"; //Class Variable

        public function myAnime()
        {
            echo $this -> $main;
        }
    }
    ?>
</body>
</html>