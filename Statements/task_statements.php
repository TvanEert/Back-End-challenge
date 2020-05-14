<?php
//function to get all tasks
function GetTasks($conn, $list_id){
    $stmt = "SELECT * FROM `tasks` WHERE list_id = :list_id";
    $query = $conn->prepare($stmt);
    $query->bindParam(":list_id", $list_id);
    $query->execute();
    $task_result = $query->fetchAll();

    return $task_result;

    $conn = NULL;
}

//function to get task bassed on id
function GetTask($conn, $id){
    $stmt = "SELECT * FROM `tasks` WHERE id = :id";
    $query = $conn->prepare($stmt);
    $query->bindParam(":id", $id);
    $query->execute();
    $result = $query->fetch();

    return $result;

    $conn = NULL;
}

//function to add a task
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

//function to delete task.
function DeleteTask($conn, $id){
    $stmt = "DELETE FROM `tasks` WHERE id = :id";
    $query = $conn->prepare($stmt);
    $query->bindParam(":id", $id);
    $query->execute();
  
    $conn = NULL;
}

//function to update task
function UpdateTask($conn, $name, $description, $duration, $status, $id){
    $stmt = "UPDATE `tasks` SET name = :name, description = :description, duration = :duration, status = :status WHERE id = :id";
    $query = $conn->prepare($stmt);
    $query->bindParam(':id', $id); 
    $query->bindParam(':name', $name); 
    $query->bindParam(':description', $description); 
    $query->bindParam(':duration', $duration); 
    $query->bindParam(':status', $status); 
    $query->execute();
  
    $conn = NULL;
}