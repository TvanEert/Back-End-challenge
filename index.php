<?php require("Includes/header.php"); ?>
<?php 
require('Statements/list_statements.php');
$result = GetLists($conn);
?>
 <div class="h-100 jumbotron">
    <h1 class="display-4">To-Do List</h1>
    <hr class="my-4">
     <table class="table table-striped lead">
        <thead>
            <th scope="col">Naam</th>
        </thead>
          <?php foreach ($result as $row){ ?>
           <tr class="clickableRow">
                <td><?php echo $row['name']?></td>
                <td>
                    <a href="view/Delete_list.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
                    <a href="?id=<?php echo $row['id'] ?>" class="btn btn-success text-light float-right"><i class="far fa-folder"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <hr class="my-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#List-Add-Modal">
            Add List
        </button>
        <?php require('Modals/add_list_modal.php'); ?>
    </div>
<?php include("Includes/footer.php"); ?>