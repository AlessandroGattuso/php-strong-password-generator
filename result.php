<?php

  include __DIR__.'/functions.php';

  session_start();

  if(isset($_GET['password_length']) && is_numeric($_GET['password_length']) && $_GET['password_length'] > 0)
    $_SESSION['password_length'] = $_GET['password_length'];
  else
    header('location:./index.php?error=invalid length');

  $_SESSION['chars_rep'] = (isset($_GET['chars_rep'])) ? $_GET['chars_rep'] : '';
  $_SESSION['letters'] = (isset($_GET['letters'])) ? $_GET['letters'] : '';
  $_SESSION['numbers'] = (isset($_GET['numbers'])) ? $_GET['numbers'] : '';
  $_SESSION['symbols'] = (isset($_GET['symbols'])) ? $_GET['symbols'] : '';

  $_SESSION['dictionary'] = 'abcdefghijklmnopqrstuvwxyz';
  setDitionary();

  $_SESSION['password'] = '';
  generatePassword();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>result</title>
</head>
<body>
  <form action="./index.php" method="GET">
    <button class="btn btn-outline-primary m-3" type="submit">back</button>
  </form>
  <div class="container d-flex justify-content-center align-items-center vh-50">
    <p><?php echo ($_SESSION['password'] != '') ? '<span class="text-primary fs-4">Password</span>: '.$_SESSION['password'] : '';?></p>
  </div>
</body>
</html>