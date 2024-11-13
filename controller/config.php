<?php

// ------ (Localhost) Server ------ //
$server = "localhost";
$username = "root";
$password = "";
$db = "askari_life_db";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

