<?php

include_once 'config.php';

class Address
{

  private $tableName = "address";

  function __construct()
  {
    $conn = new Connection;
    $this->db = $conn->connect();
  }

  public function showByNim($nim)
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE nim = $nim";
    $query = $this->db->query($query);
    return $query;
  }

}


 ?>
