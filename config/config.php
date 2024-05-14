<?php

// host
$host = "localhost";

// dbname
$dbname = "Bookstore";

// userrname
$user = "root";

// password
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$secret_key = "paste your secret key here";

// if ($conn) {
//     echo "worked successfully";
// } else {
//     echo "error in db connection";
// }