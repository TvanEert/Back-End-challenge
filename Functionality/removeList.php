<?php 

require('../Includes/connection.php'); 
require('../Statements/list_statements.php');

$id = $_GET['id'];

DeleteList($conn, $id);

header('location: ../index.php');

