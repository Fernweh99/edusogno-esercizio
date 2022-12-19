<?php
    session_start();
    include 'db_conn.php';
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
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
 <?php
    header("Location: pages/login.php");
    exit();
 ?>
</body>

</html>