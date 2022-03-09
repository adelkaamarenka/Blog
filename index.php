<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My blog</title>
    <link rel="stylesheet" href="./styles/index.css" />
  </head>
  <body>
    <?php
      include_once 'header.php'
      ?>
    <div class="wrapper">
      <div class="main-content">
        <?php
          if (!isset($_SESSION["id"])) {
            echo 'You are not logged in';
          }
          else {
            echo 'You are logged in';
          }
        ?>
      </div>
    </div>
  </body>
</html>
