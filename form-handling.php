
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <form action="form-handling.php" method="post">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">

            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">

            <label for="favouritepet">Favourite Pet</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>