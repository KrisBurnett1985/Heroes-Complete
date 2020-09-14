<?php

// db credentials
define('DB_HOST', 'kbwrestling.dns-systems.net');
define('DB_USER', 'kbwrestling_hero');
define('DB_PASS', 'heroTatchicoma01!');
define('DB_NAME', 'kbwrestling_hero');

// Connect with the database.
function connect()
{
  $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

  if (mysqli_connect_errno($con)) {
    die("Failed to connect:" . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

$con = connect();