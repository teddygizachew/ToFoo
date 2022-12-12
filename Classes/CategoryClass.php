<?php

class Category
{

  static function getCategory($connection)
  {
    $categories = $connection->query('SELECT * FROM category');
    return $categories;
  }
}
