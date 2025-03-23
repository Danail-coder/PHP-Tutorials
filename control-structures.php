<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php
        $bool = true;
        $a = 1;
        $b = 4;

        if ($a < $b && !$bool) {
            echo "The First Condition is true";
        }
        else if($a < $b && $bool) {
            echo "The Second Condition is true";
        }
        else{
            echo "None of the Conditions are true";
        }

        echo "<br>";

        switch($a) {
            case 1:
               echo "The First Case is Correct";
               break;
            case 4:
                echo "The second case is Correct";
            default:
                echo "None of the cases is Correct";
        }

        echo "<br>";

        $result = match ($b) {
            4 => "Variable b is equal to 4",
            2 => "Variable b is equal to 2",
            default => "None were a match",
        };
        echo $result; 
    ?>
</body>
</html>