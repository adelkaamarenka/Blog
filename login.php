<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Website</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <?php
        include_once 'header.php'
    ?>
    <div class="wrapper">    
        <div class="box">
        <h1 class="header">Log in</h1>
        <form action="./include/login.inc.php" method="post" class="form">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <label for="Password">Password: </label>
            <input type="password" name="Password" id="Password">
            <div class="login-buttons">
                <button type="submit" name="submit" class="form-button">Log in</button>
                <button class="forgot form-button">Forgot your password?</button>
            </div>
        </form>
            <p class="no-acc">Don't have an account yet?</p>
            <button class="register form-button">Sign up</button>
    </div></div>

</body>
</html>