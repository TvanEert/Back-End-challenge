<?php 

require('../Includes/connection.php'); 
require('../Statements/list_statements.php');

DeleteList($conn, $_GET['id']);

header('location: ../index.php');