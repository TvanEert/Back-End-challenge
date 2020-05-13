<?php

function GetTasks($conn, $list_id){
    $stmt = "SELECT * FROM `tasks` WHERE list_id = :list_id";
    $query = $conn->prepare($stmt);
    $query->bindParam(":list_id", $list_id);
    $query->execute();
    $task_result = $query->fetchAll();

    return $task_result;

    $conn = NULL;
}

function AddTask($conn, $list_id, $name, $description, $duration, $status){
    $stmt = "INSERT INTO `tasks` (list_id, name, description, duration, status) VALUES (:list_id, :name, :description, :duration, :status)";
    $query = $conn->prepare($stmt);
    $query->bindParam(":list_id", $list_id);
    $query->bindParam(":name", $name);
    $query->bindParam(":description", $description);
    $query->bindParam(":duration", $duration);
    $query->bindParam(":status", $status);
    $query->execute();

    $conn = NULL;
}