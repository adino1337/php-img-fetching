<?php

$host = "localhost";
$dbname = "registration";
$username = "root";
$password = "";

$mysqli = new mysqli($host,
                     $username,
                     $password,
                     $dbname);
                     
return $mysqli;