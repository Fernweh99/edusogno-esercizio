<?php

class User 
{
  private $nome;
  private $cognome;
  private $email;
  private $password;

  function __construct($nome, $surname, $email, $password) {
    $this->name = $name;
    $this->surname = $cognome;
    $this->email = $email;
    $this->password = $password;
  }
  //Get data
  function getNome() {
    return $this->nome;
  }

  function getCognome() {
    return $this->cognome;
  }

  function getEmail() {
    return $this->email;
  }

  // Validate data
  function validate($data) {
    $data = trim($data);
  }
  
  function validateString($data) {
    $error = true;
    if ($data == preg_replace("/[^a-zA-Z]+/", "", $data)) {
      $error = false;
    }
    return $error;
  }

  function validateEmail($email) {
    $error = true;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = false;
    }
    return $error;
  }

  function validatePassword($password, $repeatPassword) {
    $error = true;
    if ($password == $repeatPassword) {
      $error = false;
    }
    return $error;
  }
}



?>