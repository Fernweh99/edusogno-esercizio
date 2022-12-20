<?php
session_start();
 if (isset($_SESSION['log']) && $_SESSION['log']) {
   header ('Location: personal.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FontAw -->
  <script src="https://kit.fontawesome.com/7ff5ce46be.js" crossorigin="anonymous"></script>
  <!-- Style -->
  <link rel="stylesheet" href="../assets/styles/style.css?v=<?php echo time(); ?>">
  <!-- JS -->
  <script src="../assets/js/showPwd.js" defer></script>
  <title>Submit</title>
</head>
<body>
  <?php
  include '../includes/header.php';
  ?>
  <h2 class="title-page">Crea il tuo account</h2>
  <div class="box mt1">
    <form action="../controller/submit_controller.php" method="POST">
      <div class="d-col">
        <label for="name">Inserisci il nome</label>
        <input type="text" class="base-input mt1" name="name" id="name" placeholder="Mario">
        <label for="surname" class="mt3">Inserisci il cognome</label>
        <input type="text" class="base-input mt1" name="surname" id="surname" placeholder="Rossi">
        <label for="email" class="mt3">Inserisci l'e-mail</label>
        <input type="email" class="base-input mt1" name="email" id="email" placeholder="name@example.com">
        <label for="password" class="mt3">Inserisci la password</label>
        <div class="p-rel">
          <input type="password" class="base-input mt1" name="password" id="password" placeholder="Scrivila qui">
          <i class="fa-solid fa-eye" id="btn-eye"></i>
        </div>
        <p class="error mt1"><?php if(isset($_GET['error'])) echo $_GET['error'] ?></p>
        <button type="submit" class="btn mt3">Registrati</button>
      </div>
    </form>
    <p class="footer-text-box mt3">Hai già un account? <a class="link-box" href="login.php">Accedi</a></p>
  </div>
</body>
</html>