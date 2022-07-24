<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "amasty";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
