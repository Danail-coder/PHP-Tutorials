<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num01"];
        $num2 = $_POST["num02"];
        $operator = $_POST["operator"];

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operator) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 == 0) {
                        $result = "Cannot divide by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }
        } else {
            $result = "Please enter valid numbers.";
        }
    }
    ?>

    <div class="form">
        <p class="title">
            SIMPLE CALCULATOR
        </p>
    <form method="post">
        <input class="num01" type="number" name="num01" placeholder="Number One" required>
        
        <select class="operator" name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
       
        <input class="num02" type="number" name="num02" placeholder="Number Two" required>
       
        <button class="submit" type="submit">Calculate</button>
    </form>
    <button class="result"><?php echo $result; ?></button>
    </div>

</body>
</html>