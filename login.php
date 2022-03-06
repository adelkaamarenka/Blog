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
    <div class="box">
        <h1 class="header">Log in</h1>
        <form action="/" method="post" class="form">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <label for="Password">Password: </label>
            <input type="password" name="Password" id="Password">
        </form>
        <div class="forgot"><a href="#" class="forgot-text"><p>Forgot your password?</p></a></div>
        <p>Don't have an account yet?</p>
        <div class="register"><a href="./register.php"><p>Sign up</p></a></div>
    </div>
</body>
</html>