<?php

require("../../../../Lecturer.php");
$objLecturer = new Lecturer();

$image = $_POST['image'];
$nipy = $_POST['nipy'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$array = [
  'nipy'      => $nipy,
  'name'      => $name,
  'email'     => $email,
  'image'     => $image,
  'username'  => $username,
  'password'  => $password,
];

$objLecturer->insert($array);

header("location:../../../?page=user-lecturer");


 ?>
