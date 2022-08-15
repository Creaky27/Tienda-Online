<?php
require_once("../lib/functions.php");

$names = $_POST['names'];
$email = $_POST['email'];
$password = $_POST['password'];
$status = $_POST['status'];
$id = $_POST['id'];

update_user($names, $email, $password, $status, $id);

header("Location:base.php")
?>