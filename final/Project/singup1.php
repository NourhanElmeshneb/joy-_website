<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Normalize File To Rest All Objects -->
    <link rel="stylesheet" href="Css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="Css/all.min.css" />
    <!-- Main Css File -->
    <link rel="stylesheet" href="Css/login.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&family=Lato:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="Image/favicon.png" type="" />
    <title>Joy</title>
  </head>
  <body>
    <?php
    include 'singup.php';
    ?>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="#" method="post">
          <h1>Joy</h1>
          <input type="text" placeholder="username" name="username" />
          <input type="email" placeholder="email" name="email" />
          <input type="password" placeholder="password" name="password" />
          <button name="signup">sign up</button>
          <!-- <input type="submit" name="signup" value="Sing Up" class="input"/> -->
        </form>
      </div>
    </div>
  </body>
</html>
