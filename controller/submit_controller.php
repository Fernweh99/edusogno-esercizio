<?php
require_once('../models/user.php');

session_start();
include '../db_conn.php';

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

if ($new_user->validateString($new_user->getNome())) {
  die("Invalid name");
}
else if ($new_user->validateString($new_user->getCognome())) {
  die("Invalid surname");
}
else if ($new_user->validateEmail($new_user->getEmail())) {
  die("Invalid email");
}
else if (mysqli_num_rows($result) > 0){
  die("Email exist on DB");
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