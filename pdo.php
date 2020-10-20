<?php

$hostname = 'sql1.njit.edu';
$username = 'djs93';
$password = 'oTB64*ICvje0KFd$G92L';
$dsn = "mysql:host=$hostname;db=$username";
try{
    $db = new PDO($dsn, $username, $password);
    echo "connected to sql";
} catch (PDOException $error){
    $error_message = $error->getMessage();
    print "Error Connecting to MySQL: $error_message";
}
