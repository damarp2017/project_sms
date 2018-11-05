<?php
  include_once 'config.php';
  class Student
  {

    private $tableName = "students";

    public function __construct()
    {
      $conn = new Connection;
      $this->db = $conn->connect();
    }

    public function show()
    {
      $tableName = $this->tableName;
      $query = "SELECT * FROM $tableName WHERE deleted='0' ORDER BY nim DESC";
      $query = $this->db->query($query);
      return $query;
    }

    public function showByNim($nim)
    {
      $nim = $nim;
      $tableName = $this->tableName;
      $query = "SELECT * FROM $tableName WHERE deleted='0' AND nim = $nim";
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
  }


 ?>
