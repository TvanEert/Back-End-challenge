<?php
require('../Includes/connection.php'); 
require('../Statements/list_statements.php');

UpdateList($conn, $_POST["newName"], $_GET["id"]);

header('location: ../index.php');
