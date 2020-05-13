<?php
require('../Includes/connection.php'); 
require('../Statements/task_statements.php');

UpdateTask($conn, $_POST['newName'], $_POST['newDescription'], $_POST['newDuration'], $_POST['newStatus'], $_GET['id']);

header('location: ../index.php');