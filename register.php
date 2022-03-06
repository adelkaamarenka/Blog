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
        <form action="/" method="post" class="form">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <label for="Password">Password: </label>
            <input type="password" name="Password" id="Password">
            <label for="password-rep">Repeat your password: </label>
            <input type="password" name="rep-password" id="rep-password">
        </form>
        <div class="error"></div>
        <div class="register"><a href="./registered.php"><p>Register</p></a></div>
    </div>
    
</body>
</html>