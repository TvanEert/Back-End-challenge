<?php

if (isset($_POST['submit'])) {
    AddList($conn, $_POST['name']);
    header("Refresh:0");
} 

?>

<div class="modal fade" id="List-Add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label>List Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Input the list name" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Add List</button>
                </form>
            </div>
        </div>
    </div>
</div>