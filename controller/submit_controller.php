<?php
require_once('../models/user.php');

session_start();
include '../db_conn.php';

// Validate if is empty
if (empty($_POST['name'])) {
  header('Location: ../pages/submit.php?error=Il nome è richiesto');
  exit();
}
if (empty($_POST['surname'])) {
  header('Location: ../pages/submit.php?error=Il cognome è richiesto');
  exit();
}
if (empty($_POST['email'])) {
  header('Location: ../pages/submit.php?error=l\'email è richiesta');
  exit();
}
if (empty($_POST['password'])) {
  header('Location: ../pages/submit.php?error=La password è richiesta');
  exit();
}

$new_user = new User($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);

$new_user->validate($new_user->getNome());
$new_user->validate($new_user->getCognome());
$new_user->validate($new_user->getEmail());
$new_user->validate($new_user->getPassword());

$name = $new_user->getNome();
$surname = $new_user->getCognome();
$email = $new_user->getEmail();
$password = $new_user->getPassword();

$email_exists_sql = "SELECT * FROM utenti WHERE email = '$email'";
$result = $result = mysqli_query($conn, $email_exists_sql);

// Validate data
if ($new_user->validateString($new_user->getNome())) {
  header("Location: ../pages/submit.php?error=Il nome non è valido");
  exit();
}
else if ($new_user->validateString($new_user->getCognome())) {
  header("Location: ../pages/submit.php?error=Il cognome non è valido");
}
else if ($new_user->validateEmail($new_user->getEmail())) {
  header("Location: ../pages/submit.php?error=L'email non è valida");
  exit();
}
else if (mysqli_num_rows($result) > 0){
  header("Location: ../pages/submit.php?error=L'email esiste già");
  exit();
}

$add_user = "INSERT INTO utenti (nome, cognome, email, password) VALUES('$name', '$surname', '$email', '$password')";

if ($conn->query($add_user) === TRUE) {
  $_SESSION['log'] = TRUE;
  $_SESSION['email'] = $new_user->getEmail();
  $_SESSION['name'] = $new_user->getNome();
  $_SESSION['surname'] = $new_user->getCognome();
  header("Location: ../pages/personal.php");
} else {
  echo "Error creating table: " . $conn->error;
}
?>