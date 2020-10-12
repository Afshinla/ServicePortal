<?php

$serverName="Localhost";
$dbUsername="root";
$dbPassword="root";
$dbName="serviceportal";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
}