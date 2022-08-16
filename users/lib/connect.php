<?php
// $db="elorigin_unid";
// $user="root";
// $password="";
// $host="localhost";

$db = "elorigin_unid";
$user = "elorigin_unid";
$password = "Elorigin.2022!";
$host = "eloriginalqroo.com";

$connect=mysqli_connect($host, $user, $password, $db);

if($connect)
    {
    echo "TRUE";
    }
    else
    {
    echo "FALSE";
    }
?>