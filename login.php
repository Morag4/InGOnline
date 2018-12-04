<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';
  if (!empty($_POST['usersn']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usersn, password FROM users WHERE usersn = :usersn');
    $records->bindParam(':usersn', $_POST['usersn']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > -1 && password_verify($_POST['password'], $results['password'])) 
    {
      $_SESSION['user_id'] = $results['id'];
      header("Location: regacadinicio.html");
    } else {
      $message = 'Fallo, corrija el usuario/password';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>
    <form action="login.php" method="POST">
      <input name="usersn" type="text" placeholder="Ingrese su usuario">
      <input name="password" type="password" placeholder="Ingrese su Password">
      <input type="submit" value="Verificar">
    </form>
  </body>
</html>