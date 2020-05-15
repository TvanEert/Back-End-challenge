<?php 
    require("../Includes/connection.php");

    require("../Statements/list_statements.php");
    require("../Statements/task_statements.php");
    require("../Functionality/add_task.php");

    $result = GetList($conn, $_GET['id']);
    $task_result = GetTasks($conn, $_GET['id']);

    include("../Includes/header.php"); 
?>

<div class="h-100 jumbotron">
    <h1 class="display-4"><?php echo $result['name']?></h1>
    <hr class="my-4">
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" onclick="filterTasks('All')" class="btn btn-secondary">All</button>
        <button type="button" onclick="filterTasks('Open')" class="btn btn-secondary">Open</button>
        <button type="button" onclick="filterTasks('In Progress')" class="btn btn-secondary">In Progress</button>
        <button type="button" onclick="filterTasks('Finished')" class="btn btn-secondary">Finished</button>
    </div>
    <table class="table lead">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Duration in minutes</th>
        </thead>
        <?php foreach ($task_result as $row){ ?>
            <tr class="taskRow <?php echo $row['status']?>">
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['duration']?></td>
                <td>
                    <a href="Delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="Update_task.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <hr class="my-4">
    <a type="button" class="btn btn-primary" href="../index.php">Back</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Task-Add-Modal">Add Task</button>
    <div class="modal fade" id="Task-Add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" placeholder="Input the task name" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" maxlength="50" placeholder="Input the task description" required>
                    </div>
                    <div class="form-group">
                        <label>duration in minutes</label>
                        <input type="number" class="form-control" name="duration" min="1" max="999" placeholder="Input the task duration" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" id="status">
                            <option>Open</option>
                            <option>In Progress</option>
                            <option>Finished</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add List</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include("../Includes/footer.php"); ?>