<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Form</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form class="form" action="formhandler.inc.php" method="POST">
        <h3>Sign Up</h3>
        <input class="name" type="text" name="username" placeholder="Username">
        <input class="password" type="password" name="pwd" placeholder="Password">
        <input class="email" type="text" name="email" placeholder="E-mail">
        <button class="sign">Sign Up</button>
    </form>

    <form class="form" action="userupdate.inc.php" method="POST">
        <h3>Change Account</h3>
        <input class="name" type="text" name="username" placeholder="Username">
        <input class="password" type="password" name="pwd" placeholder="Password">
        <input class="email" type="text" name="email" placeholder="E-mail">
        <button class="sign">Update</button>
    </form>

    <form class="form" action="userdelete.inc.php" method="POST">
        <h3>Delete Account</h3>
        <input class="name" type="text" name="username" placeholder="Username">
        <input class="password" type="password" name="pwd" placeholder="Password">
        <button class="sign">Delete</button>
    </form>

    <form class="form" action="search.php" method="POST">
        <label for="search">Search for User: </label>
        <input class="name" id = "search" type="text" name="usersearch" placeholder="Search...">
        <button class="sign">Search</button>
    </form>

</body>
</html>