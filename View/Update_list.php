<?php 
require('../includes/connection.php'); 

require('../Statements/list_statements.php');
$result = GetList($conn, $_GET['id']);

include('../Includes/header.php'); 
?>
<h2 class="display-4">Lijst bewerken</h2>

<form action="../Functionality/edit_list.php?id=<?php echo $result['id'] ?>" method="post">
    <div class="form-group">
        <label for="">Geef een niewe naam aan de lijst</label>
        <input type="text" class="form-control" name="newName" value="<?php echo $result['name'] ?>">
    </div>
    <input type="submit" class="btn btn-success" value="update">
</form>


<?php include('../Includes/footer.php'); ?>