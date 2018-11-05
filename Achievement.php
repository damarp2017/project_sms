<?php

include_once 'config.php';

class Achievement
{

  private $tableName = "achievement";

  function __construct()
  {
    $conn = new Connection;
    $this->db = $conn->connect();
  }

  public function show()
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE deleted = '0' order by id DESC";
    $query = $this->db->query($query);
    return $query;
  }

  public function showByNim($nim)
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE nim = $nim AND deleted = '0'";
    $query = $this->db->query($query);
    return $query;
  }

  public function showById($id)
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE id = $id AND deleted = '0'";
    $query = $this->db->query($query);
    return $query;
  }

  public function count()
  {
    $tableName = $this->tableName;
    $query = "SELECT * FROM $tableName WHERE deleted = '0'";
    $query = $this->db->query($query);
    $count = $query->rowCount();
    return $count;
  }
}


 ?>
