<?php
session_start();
require_once('../Classes/UserClass.php');

User::signOut();
