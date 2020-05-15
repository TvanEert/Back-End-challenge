<?php 
    require('../includes/connection.php'); 

    require('../Statements/task_statements.php');
    $result = GetTask($conn, $_GET['id']);

    require("../Includes/header.php");
?>

<h2 class="display-4">Delete list</h2>
<p>Are you sure you want to delete the task <b><?php echo $result['name'] ?></b> and all of its content.</p>
<a href="../Functionality/remove_task.php?id=<?php echo $_GET['id'] ?>&listId=<?php echo $result['list_id'] ?>" class="btn btn-danger text-white">Delete</a>
<?php require("../Includes/footer.php"); ?>