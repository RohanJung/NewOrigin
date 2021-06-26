<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_origin_db";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect to origin");
}


