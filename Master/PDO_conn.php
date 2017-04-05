<?php
//this file should really be hidden somewhere else, but whatever for now
session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "comp1536project";

try {
    //make the connection
    $DB_conn = new PDO("mysql:host={$DB_host};dbname={$DB_name};", $DB_user, 
    $DB_pass);
    // set the PDO error mode to exception
    $DB_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Just turn emulation off in MySQL driver - only really used in older of MYSQL
    $DB_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo "Connect success.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

include_once 'class.user.php';


$user = new USER($DB_conn);
//close connection
//$conn = null;
?>