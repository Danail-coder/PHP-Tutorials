<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal Variables</title>
</head>
<body>
    <?php
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";
        
        $_SESSION["USERNAME"] = "JUNIORE";
        echo $_SESSION["USERNAME"]
        
        /*Other Superglobals
        $_GLOBALS[""];
        $_GET[""];
        $_POST[""];
        $_REQUEST[""];
        $_COOKIE[""];
        $_FILES[""];
        $_ENV[""];
        $_SESSION[""];
        */

    ?>
</body>
</html>