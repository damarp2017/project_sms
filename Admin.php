<?php

  include_once 'config.php';

  class Admin
  {

    private $tableName = "admin";

    function __construct()
    {
      $conn = new Connection;
      $this->db = $conn->connect();
    }

    public function show()
    {
      $tableName = $this->tableName;
      $query = "SELECT * FROM $tableName WHERE deleted = '0' ORDER By id DESC ";
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

    public function insert($array)
    {
      $tableName = $this->tableName;
      $query = "INSERT INTO $tableName (name, email, image, username, password) VALUES (:name, :email, :image, :username, :password)";
      return $this->db->prepare($query)->execute($array);
    }

    public function update($array)
    {
      $tableName = $this->tableName;
      $query = "UPDATE $tableName SET name=:name, email=:email, username=:username, password=:password WHERE id=:id";
      return $this->db->prepare($query)->execute($array);
    }

    public function delete($array)
    {
      $tableName = $this->tableName;
      $query = "UPDATE $tableName SET deleted=1 WHERE id=:id";
      return $this->db->prepare($query)->execute($array);

    }
  }


?>
