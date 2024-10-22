<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Normalize File To Rest All Objects -->
    <link rel="stylesheet" href="Css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="Css/all.min.css" />
    <!-- Main Css File -->
    <link rel="stylesheet" href="Css/upDate.css" />
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
    include 'upDate.php';
    ?>
    <div class="form">
      <form action="#" method="post" class="profile">
        <h1>Joy</h1>
        <div class="img">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOH2aZnIHWjMQj2lQUOWIL2f4Hljgab0ecZQ&usqp=CAU"
          />
        </div>
        <input type="text" placeholder="username" name="update_name" value="<?php echo $_SESSION['name']; ?>"/>
        <input type="email" placeholder="email" name="update_email" value="<?php echo $_SESSION['email']; ?>"/> 
        <input
          type="password"
          placeholder="Enter current password"
          name="old_password"
        />
        <input
          type="password"
          placeholder="Enter new password"
          name="new_password"
        />
        <input
          type="password"
          placeholder="confirm_password"
          name="confirm_password"
        />
        <button name="update_profile">save changes</button>
        <!-- <input type="submit" name="update_profile" value="save changes" /> -->
      </form>
    </div>
  </body>
</html>
