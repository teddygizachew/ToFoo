<?php

class Address
{

  static function createAddress($connection, $street1, $street2, $city, $state, $zip, $userID)
  {
    $query = $connection->prepare('INSERT INTO address (street1, street2, city, state, zip, userID) VALUES (?, ?, ?, ?, ?, ?)');
    $query->execute([$street1, $street2, $city, $state, $zip, $userID]);
    header("location: profile.php");

    return;
  }

  static function getAddress($connection, $userID)
  {
    $query = $connection->prepare('SELECT * FROM address WHERE userID=?');
    $query->execute([$userID]);
    $address = $query->fetch();
    return $address;
  }
}
