<?php

class Cart
{
  static function getCartCount($connection)
  {
    $query = $connection->query('SELECT COUNT(*) AS count FROM cart');
    $count = $query->fetch();
    return $count;
  }

  static function getCart($connection)
  {
    $result = $connection->query('SELECT * FROM cart');
    return $result;
  }

  static function getItem($connection, $itemID)
  {
    $query = $connection->prepare('SELECT * FROM item WHERE ID=?');
    $query->execute([$itemID]);
    $item = $query->fetch();
    return $item;
  }
}
