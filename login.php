<?php

  $user = $_POST['user'];

  if ($user == 'admin') {
    header("location: admin/?page=dashboard");
  }elseif ($user == 'lecturer') {
    header("location: lecturer/?page=dashboard");
  }else {
    header("location: student/?page=dashboard");
  }

 ?>
