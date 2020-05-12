<?php

function GetLists($conn){
  $stmt = "SELECT * FROM `lists`";
  $query = $conn->prepare($stmt);
  $query->execute();
  $result = $query->fetchAll();

  return $result;

  $conn = NULL;
}

function GetList($conn, $id){
  $stmt = "SELECT * FROM `lists` WHERE id = :id";
  $query = $conn->prepare($stmt);
  $query->bindParam(":id", $id);
  $query->execute();
  $result = $query->fetch();

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

function DeleteList($conn, $id){
  var_dump($conn);
  var_dump($id);

  $stmt1 = "DELETE FROM `lists` WHERE id = :id";
  $query1 = $conn->prepare($stmt1);
  $query1->bindParam(":id", $id);
  $query1->execute();

  $stmt2 = "DELETE FROM `tasks` WHERE id = :id";
  $query2 = $conn->prepare($stmt2);
  $query2->bindParam(":id", $id);
  $query2->execute();

  $conn = NULL;
}

function UpdateList($conn, $name, $id){
  $stmt = "UPDATE `lists` SET name = :name WHERE id = :id ";
  $query = $conn->prepare($stmt);
  $query->bindParam(":name", $name);
  $query->bindParam(":id", $id);
  $query->execute();

  $conn = NULL;
}
