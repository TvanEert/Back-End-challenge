<?php 
require('../Includes/header.php'); 

require('../Statements/task_statements.php');
$result = GetTask($conn, $_GET['id']);

?>
<form action="../Functionality/edit_task.php?id=<?php echo $result['id'] ?>" method="POST">        
    <div class="form-group">
        <label>name</label>
        <input type="text" class="form-control" name="newName" placeholder="Input the task name" value="<?php echo $result['name']?>" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="newDescription" maxlength="50" placeholder="Input the task description" value="<?php echo $result['description']?>" required>
    </div>
    <div class="form-group">
        <label>duration in minutes</label>
        <input type="number" class="form-control" name="newDuration" min="1" max="999" placeholder="Input the task duration" value="<?php echo $result['duration']?>" required>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="newStatus" id="status">
            <option>Open</option>
            <option>In Progress</option>
            <option>Finished</option>
        </select>
    </div>
    <div class="modal-footer">
    <input type="submit" class="btn btn-success" value="update">
    </div>
</form>