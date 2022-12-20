<?php
  session_start();
 if (!$_SESSION['log']) {
   header ('Location: login.php');
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
  <title>Personal Page</title>
</head>
<body>
  <?php
  include '../includes/header.php';
  ?>
  <h2 class="title-page">Ciao <?=$_SESSION['name']?> ecco i tuoi eventi</h2>
  <div class="container-box mt1">
    <div class="box-sm mt1">
      <h3 class="title-ev">Esegui logout</h3>
      <form action="../controller/logout_controller.php" method="POST">
        <div class="d-col">
          <button type="submit" class="btn mt2">Logout</button>
        </div>
      </form>
    </div>
    <div class="box-sm mt1">
    <h3 class="title-ev">Nome Evento</h3>
      <form method="POST">
        <div class="d-col">
          <button type="submit" class="btn mt2">Join</button>
        </div>
      </form>
    </div>
    <div class="box-sm mt1">
    <h3 class="title-ev">Nome Evento</h3>
      <form method="POST">
        <div class="d-col">
          <button type="submit" class="btn mt2">Join</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>