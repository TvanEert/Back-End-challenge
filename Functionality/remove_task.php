<?php 

require('../Includes/connection.php'); 
require('../Statements/task_statements.php');

DeleteTask($conn, $_GET['id']);

header('location: ../View/Open_list.php?id='. $_GET["id"]);

