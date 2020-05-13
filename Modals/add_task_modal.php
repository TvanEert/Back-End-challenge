<?php
if (isset($_POST['submit'])) {
    AddTask($conn, $_GET['id'], $_POST["name"], $_POST["description"], $_POST["duration"], $_POST["status"]);
    header("Refresh:0");
} 
?>

<div class="modal fade" id="Task-Add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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