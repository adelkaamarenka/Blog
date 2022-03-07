<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Website</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>
<body>
        <?php
        include_once 'header.php'
    ?>
    <div class="wrapper">
        <div class="box">
        <h1 class="header">Register</h1>
        <form action="./include/register.inc.php" method="post" class="form">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" pattern="^[a-zA-Z0-9_!@#$%]*$" title="You can use upper- and lowercase letters, numbers, and these symbols: _ ! @ # $ %">
            <label for="password-rep">Repeat your password: </label>
            <input type="password" name="rep-password" id="rep-password">
            <button type="submit" name="submit" class="form-button register">Sign in</button>
        </form>
    </div>
    
</body>
</html>