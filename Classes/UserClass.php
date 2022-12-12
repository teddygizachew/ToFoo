<?php

class User
{

  static function getUser($connection)
  {
    $query = $connection->prepare('SELECT * FROM user WHERE ID=?');
    $query->execute([$_SESSION['id']]);
    $user = $query->fetch();
    return $user;
  }

  static function signup($connection, $firstName, $lastName, $email, $password, $phone, $role)
  {
    $query = $connection->query('SELECT * FROM user');
    while ($user = $query->fetch()) {
      if ($email == trim($user['email'])) {
        die("Email already exists...try again!");
      }
    }

    $query = $connection->prepare('INSERT INTO user (firstName, lastName, email, password, phone, role) VALUES (?, ?, ?, ?, ?, ?)');
    $query->execute([$firstName, $lastName, $email, $password, $phone, $role]);
    return;
  }

  static function signin($connection, $email, $password)
  {
    $query = $connection->prepare('SELECT * FROM user WHERE email=?');
    $query->execute([$email]);

    $user = $query->fetch();
    if ($user['email'] == trim($email)) {
      if ($user['password'] == trim($password)) {
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $user['ID'];

        header('location: index.php');
      } else {
        die('You\'re password didn\'t match our records');
      }
    } else {
      die("Email Does Not Exist! Please create an account!");
    }
    return;
  }

  static function signOut()
  {
    if (!isset($_SESSION['logged'])) header('location: Signin.php');

    unset($_SESSION['logged']);
    session_destroy();

    header('location: index.php');
  }

  static function logged_in()
  {
    // return (isset($_SESSION['logged']) && $_SESSION['logged'] == true);
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      return true;
    } else {
      return false;
    }
  }
}
