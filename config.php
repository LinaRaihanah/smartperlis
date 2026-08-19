<?php

// =====================================
// SMART PERLIS - DATABASE CONFIG
// =====================================

$host = "localhost";
$username = "root";
$password = "";
$database = "smart_perlis";

$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");


// =====================================
// TIMEZONE
// =====================================

date_default_timezone_set("Asia/Kuala_Lumpur");


// =====================================
// GMAIL SMTP CONFIGURATION
// =====================================

if (!defined("MAIL_HOST")) {
    define("MAIL_HOST", "smtp.gmail.com");
}

if (!defined("MAIL_PORT")) {
    define("MAIL_PORT", 587);
}

if (!defined("MAIL_USERNAME")) {
    define("MAIL_USERNAME", "amalinaraihanah06@gmail.com");
}

if (!defined("MAIL_PASSWORD")) {
    define("MAIL_PASSWORD", "bjyq pvrz pryw rizp");
}

if (!defined("MAIL_FROM_NAME")) {
    define("MAIL_FROM_NAME", "Smart Perlis Tourism Portal");
}

?>