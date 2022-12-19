<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FontAw -->
  <script src="https://kit.fontawesome.com/7ff5ce46be.js" crossorigin="anonymous"></script>
  <!-- Style -->
  <link rel="stylesheet" href="../assets/styles/style.css">
  <title>Login</title>
</head>
<body>
  <?php
  include '../includes/header.php';
  ?>
  <h2 class="title-page">Hai già un account?</h2>
  <div class="box mt1">
    <form action="">
      <div class="d-col">
        <label for="email">Inserisci l'e-mail</label>
        <input type="text" class="base-input mt1" name="email" id="email" placeholder="name@example.com">
        <label for="password" class="mt3">Inserisci la password</label>
        <div class="p-rel">
          <input type="password" class="base-input mt1" name="password" id="password" placeholder="Scrivila qui">
          <i class="fa-solid fa-eye eye"></i>
        </div>
        <button type="submit" class="btn mt3">ACCEDI</button>
      </div>
    </form>
    <p class="footer-text-box mt3">Non hai ancora un profilo? <a class="link-box" href="#">Registrati</a></p>
  </div>
</body>
</html>