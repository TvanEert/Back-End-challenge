<?php 
require('includes/connection.php'); 
require('Statements/list_statements.php');
require('Functionality/add_list.php');

//Require Statements for list funtions

$result = GetLists($conn);

include("Includes/header.php");
?>
 <div class="h-100 jumbotron">
    <h1 class="display-4">To-Do List</h1>
    <hr class="my-4">
     <table class="table lead">
        <thead>
            <th scope="col">Name</th>
        </thead>
          <?php foreach ($result as $row){ ?>
           <tr class="clickableRow">
                <td><?php echo $row['name']?></td>
                <td>
                    <a href="view/Delete_list.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="view/Update_list.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
                    <a href="view/Open_list.php?id=<?php echo $row['id'] ?>" class="btn btn-success text-light float-right"><i class="far fa-folder"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <hr class="my-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#List-Add-Modal">
            Add List
        </button>
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

    </div>
<?php include("Includes/footer.php"); ?>