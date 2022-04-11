<?php
include '../classes/Users.php';
$obj = new Users;

//print_r($_POST);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$obj->store_users($fname, $lname, $contact, $username, $password, $email);
// echo "<pre>";
// print_r($obj->show_books());
// echo "<pre>";

?>