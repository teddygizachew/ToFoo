<?php
require_once('../Settings/Connection.php');
require_once('../Classes/UserClass.php');

User::deleteUser($connection, $_GET['user_ID']);
