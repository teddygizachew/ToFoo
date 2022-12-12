<?php

class Restaurant
{
  static function createRestaurant($connection, $name, $categoryID, $city, $state, $street1, $street2, $zip)
  {
    $query = $connection->prepare('INSERT INTO restaurant (name, categoryID, city, state, street1, street2, zip) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $query->execute([$name, $categoryID, $city, $state, $street1, $street2, $zip]);
    header("location: profile.php");
    return;
  }

  static function getRestaurant($connection)
  {
    $result = $connection->query('SELECT * FROM restaurant');
    return $result;
  }

  static function delete($connection, $restaurantID)
  {
    $query = $connection->prepare('DELETE FROM restaurant WHERE ID=?');
    $query->execute([$restaurantID]);
    header("location: index.php");
  }
}
