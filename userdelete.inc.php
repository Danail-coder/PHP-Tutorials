<?php

$servername = "localhost";
$username = "root";
$pwd = "";
$database = "danail_database";

if ($_SERVER["REQUEST_METHOD" == "POST"]) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try{
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd ;";

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        

        $stmt = $pdo->prepare($query);
 

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../MyWebsite/dbform.php");

        print_r($_POST);

        die();
    }
    catch(PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {    
    header("Location: ../MyWebsite/dbform.php");
}