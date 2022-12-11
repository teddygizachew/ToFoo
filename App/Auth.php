<?php
error_reporting(E_ALL);

session_start();

function signup($connection, $firstName, $lastName, $email, $password, $phone, $role)
{
  $query = $connection->query('SELECT * FROM user');
  while ($user = $query->fetch()) {
    if ($email == trim($user['email'])) {
      die("Email already exists...try again!");
    }
  }
  echo "ASASASSAAS";

  $query = $connection->prepare('INSERT INTO user (firstName, lastName, email, password, phone, role) VALUES (?, ?, ?, ?, ?, ?)');
  $query->execute([$firstName, $lastName, $email, $password, $phone, $role]);

  return;
}

function signin($connection, $email, $password)
{
  $query = $connection->prepare('SELECT * FROM user WHERE email=?');
  $query->execute([$email]);

  $user = $query->fetch();
  if ($user['email'] == trim($email)) {
    if ($user['password'] == trim($password)) {
      $_SESSION['logged'] = true;
      header('location: index.php');
    } else {
      die('You\'re password didn\'t match our records');
    }
  } else {
    die("Email Does Not Exist! Please create an account!");
  }
  return;
}

function logged_in()
{
  // return (isset($_SESSION['logged']) && $_SESSION['logged'] == true);
  if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    return true;
  } else {
    return false;
  }
}
