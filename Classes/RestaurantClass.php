<?php

class Restaurant
{
  static function delete($connection, $restaurantID)
  {
    $query = $connection->prepare('DELETE FROM restaurant WHERE ID=?');
    $query->execute([$restaurantID]);
    header("location: index.php");
  }
}
