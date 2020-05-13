<?php 
    require("../Includes/header.php"); 

    require("../Includes/connection.php");

    require("../Statements/list_statements.php");
    require("../Statements/task_statements.php");

    $result = GetList($conn, $_GET['id']);
    $task_result = GetTasks($conn, $_GET['id']);

    
?>

<div class="h-100 jumbotron">
    <h1 class="display-4"><?php echo $result['name']?></h1>
    <hr class="my-4">
    <table class="table table-striped lead">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Duration in minutes</th>
        </thead>
          <?php foreach ($task_result as $row){ ?>
           <tr class="clickableRow">
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['duration']?></td>
                <td>
                    <a href="view/Delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="view/Update_task.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            <?php } ?>
    </table>
    <hr class="my-4">
    <button type="button" class="btn btn-primary" href="../index.php">
        Back
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Task-Add-Modal">
        Add Task
    </button>
    <?php require('../Modals/add_task_modal.php'); ?>
</div>

<?php require("../Includes/footer.php"); ?>