<?php
    session_start();

    $_SESSION["username"] = "Danail";
    //session_unset(); Removing all sessions in a database
    //unset($_SESSION["username"]); Removing one sesstion from a database
    //session_destroy(); Stopping a session in a database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    $_SESSION["username"] = "Danail";
    ?>
</body>
</html>