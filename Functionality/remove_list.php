<?php 

require('../Includes/connection.php'); 
require('../Statements/list_statements.php');

var_dump($_GET['id']);

DeleteList($conn, $_GET['id']);

header('location: ../index.php');

