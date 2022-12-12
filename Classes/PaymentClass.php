<?php
session_start();

class Payment
{
  static function getPayment($connection, $userID)
  {
    $query = $connection->prepare('SELECT * FROM payment WHERE userID=?');
    if ($query->execute([$userID])) {
      $payment = $query->fetch();
      return $payment;
    } else {
      return false;
    }
  }

  static function createPayment($connection, $fullName, $cardNum, $expiration, $securityCode, $userID)
  {
    $query = $connection->query('SELECT * FROM payment');
    while ($payment = $query->fetch()) {
      if ($cardNum == trim($payment['cardNum'])) {
        die("Payment already exists...try again!");
      }
    }
    $query = $connection->prepare('INSERT INTO payment (fullName, cardNum, expiration, securityCode, userID) VALUES (?, ?, ?, ?, ?)');
    $query->execute([$fullName, $cardNum, $expiration, $securityCode, $userID]);
    header('location: profile.php');
    return;
  }
}
