<?php
// Database
// username: b8df61fa06cf94
// password: e0cabfd0
// host: us-cdbr-iron-east-05.cleardb.net
// db: heroku_21d18c1df95a42f
function getDatabaseConnection()
{
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b8df61fa06cf94";
    $password = "e0cabfd0";
    $dbname="heroku_21d18c1df95a42f";

    // Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
?>