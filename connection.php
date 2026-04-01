<?php
$host="localhost";
$user="root";
$pass="";
$db="blog";
$con=mysqli_connect($host,$user,$pass,$db);
if ($con->connect_error)
    {
        die("connection failed: ".$con->connect_error);
    }
    if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
    function require_login()
    {
        if(!isset($_SESSION['username']))
            {
                header("Location: login.php");
                exit;
            }
    }    