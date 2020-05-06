<?php

function AddList($conn, $name){
  $stmt = "INSERT INTO `lists` SET name = :name";
  $query = $conn->prepare($stmt);
  $query->bindParam(":name", $name);
  $query->execute();

  $conn = null;
}