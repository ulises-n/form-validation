<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="$_POST">
      <h1>Inicio de sesion</h1>
      <label>Username: </label>
      <input type="text" name="username"> <br>
      <label>Password: </label>
      <input type="password" name="password"> <br>
      <input type="submit"><br><br>
  </form>
</body>
</html>

<?php
  $username = $_GET["username"];
  $password = $_GET["password"];

  if($username == "ulises.nh" && $password == "zeniter"){
    echo "Hello {$username} welcome on board";
  }else{
    echo "Incorrect password or username";
  }
?>

