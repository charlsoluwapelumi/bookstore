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

$secret_key = "sk_test_51PBfWQRsYLjWICCkNkNgRIOAc2PuxuQg87FDpXKUxVUv7VlJag9yy0vs7yhGNfx35YTzdEdhmr8gImD6g5vVyxD1005MHnyQT1";

// if ($conn) {
//     echo "worked successfully";
// } else {
//     echo "error in db connection";
// }