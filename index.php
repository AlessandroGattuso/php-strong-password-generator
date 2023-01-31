<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <title>php-strong-password-generator</title>
</head>
<body>
  <div class="container d-flex flex-column align-items-center gap-5">
    <h1 class="text-center">Password Generator</h1>
    <form action="./result.php" method="GET">
      <div class="text-danger"><?php echo (isset($_GET['error'])) ? $_GET['error'] : ''; ?></div>
      <div class="input-group mb-3">
        <input name="password_length" type="text" class="form-control" placeholder="Password's lenght" value="<?php echo !empty($_SESSION['password_length']) ? $_SESSION['password_length'] : '';?>" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Send</button>
      </div>
      <div class="form-check">
        <input name="chars_rep" class="form-check-input" type="checkbox" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          No repetitions
        </label>
      </div>
      <div class="form-check">
        <input name="letters" class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
        <label class="form-check-label" for="flexCheckDefault">
          Letters 
        </label>
      </div>
      <div class="form-check">
        <input name="numbers" class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
        <label class="form-check-label" for="flexCheckDefault">
          Numbers 
        </label>
      </div>
      <div class="form-check">
        <input name="symbols" class="form-check-input" type="checkbox" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Symbols 
        </label>
      </div>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>