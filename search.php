<?php

    $servername = "localhost";
    $usersearch = "root";
    $database = "danail_database";
    
    if ($_SERVER["REQUEST_METHOD" == "POST"]) {
        $usersearch = $_POST["usersearch"];
    
        try{
            require_once "dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;";
    
            $stmt->bindParam(":usersearch", $usersearch);
    
            $stmt = $pdo->prepare($query);
     
    
            $stmt->execute();

            $results = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
    
            $pdo = null;
            $stmt = null;
    
    
            print_r($_POST);
        }
        catch(PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    }
    else {    
        header("Location: ../MyWebsite/dbform.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <h3>Search Results: </h3>

    <?php
    if (empty($results)) {
        echo "<p>There were no results</p>";
    }
    else{
        foreach($results as $row) {
            echo htmlspecialchars($row["username"]);
            echo htmlspecialchars($row["comments"]);
            echo htmlspecialchars($row["created_at"]);
        }
    }
    ?>
</body>
</html>