<?php

include_once 'config.php';

class Lecturer
{

  private $tableName = "lecturer";

  function __construct()
  {
    $conn = new Connection;
    $this->db = $conn->connect();
  }

  public function show()
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE deleted='0'";
    $query = $this->db->query($query);
    return $query;
  }

  public function showByNipy($nipy)
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE deleted='0' AND nipy=$nipy";
    $query = $this->db->query($query);
    return $query;
  }

  public function count()
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE deleted='0'";
    $query = $this->db->query($query);
    $count = $query->rowCount();
    return $count;
  }

  public function insert($array)
  {
    $tableName = $this->tableName;
    $query = "INSERT INTO $tableName (nipy, name, email, image, username, password) VALUES (:nipy, :name, :email, :image, :username, :password)";
    return $this->db->prepare($query)->execute($array);
  }


}


 ?>
