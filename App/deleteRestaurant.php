<?php
require_once('../Settings/Connection.php');

require_once('../Classes/RestaurantClass.php');

Restaurant::delete($connection, $_GET['restaurant_id']);
