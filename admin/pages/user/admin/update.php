<?php

  require("../../../../Admin.php");
  $objAdmin = new Admin();

  // $image = $_POST['image'];
  $id = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $array = [
    'name' => $name,
    'email' => $email,
    // 'image' => $image,
    'username' => $username,
    'password' => $password,
    'id' => $id
  ];

  $objAdmin->update($array);

  header("location:../../../?page=user-admin");

 ?>
