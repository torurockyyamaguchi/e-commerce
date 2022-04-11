<?php
include '../classes/Users.php';
$obj = new Users;

$users_id = $_GET['id'];

$obj->destroy_users($users_id);

?>