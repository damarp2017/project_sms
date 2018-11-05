<?php

  require("../../../../Admin.php");
  $objAdmin = new Admin();

  $id = $_GET['id'];

  $array = [
    'id' => $id
  ];

  echo $objAdmin->delete($array);

  header("location:../../../?page=user-admin");


 ?>
