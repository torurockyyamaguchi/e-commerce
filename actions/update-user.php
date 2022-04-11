<?php
include '../classes/Users.php';
$obj = new Users;

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$item_id = $_POST['item-id'];


$obj->update_user($fname, $lname, $contact, $username, $password, $email,$item_id);
// echo "<pre>";
// print_r($obj->show_books());
// echo "<pre>";

?>