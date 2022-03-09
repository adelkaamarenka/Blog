    <link rel="stylesheet" href="./styles/header.css">
    
    <header>
      <div class="header-content">
        <h1 class="logo">Kocham dupy</h1>
        <nav>
          <a href="./index.php" class="link home">Home</a>
          <a href="#" class="link about">Zobacz memy</a>
          <?php 
          if (!isset($_SESSION["id"])) {
            echo '<div class="log-in button">
            <a href="./login.php" class="log-in-text"><p>Log in</p></a>
          </div>
          <div class="sign-up button">
            <a href="./register.php" class="sign-up-text"><p>Sign up</p></a>
          </div>';
          }
          else {
            echo '<div class="log-in button">
            <a href="./controllers/logout.php" class="log-in-text"><p>Log out</p></a>
          </div>
          <div class="sign-up button">
            <a href="./register.php" class="sign-up-text"><p>Your profile</p></a>
          </div>}';
          };
          ?>
          
        </nav>
      </div>
    </header>