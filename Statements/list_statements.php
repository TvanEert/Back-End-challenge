<?php

function GetLists($conn){
  $stmt = "SELECT * FROM `lists`";
  $query = $conn->prepare($stmt);
  $query->execute();
  $result = $query->fetchAll();

  return $result;

  $conn = NULL;
}

function AddList($conn, $name){
  $stmt = "INSERT INTO `lists` SET name = :name";
  $query = $conn->prepare($stmt);
  $query->bindParam(":name", $name);
  $query->execute();

  $conn = NULL;
}