<?php
session_start();
include '../db_conn.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
  function validate($data) {
    $data = trim($data);
    return $data;
  }
}

$email = validate($_POST['email']);
$pwd = validate($_POST['password']);

if (empty($email)) {
  header('Location: ../pages/login.php?error=Email is required');
  exit();
}
else if (empty($pwd)) {
  header('Location: ../pages/login.php?error=Password is required');
  exit();
}
$pwd = hash('sha256', $pwd);

$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$pwd'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['name'] = $row['nome'];
  $_SESSION['surname'] = $row['cognome'];
  $_SESSION['log'] = TRUE;
  header('Location: ../pages/personal.php');
  exit();
} 
else {
  header('Location: ../pages/login.php?error=Password e Email errati');
  exit();
}
?>