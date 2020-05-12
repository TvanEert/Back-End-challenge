<?php require("../Includes/header.php");

    $id = $_GET['id'];

    require('../Statements/list_statements.php');
    $result = GetList($conn, $id);
?>

<h2 class="display-4">Delete list</h2>
<p>Are you sure you want to delete the list <b><?php echo $result['name'] ?></b> and all of its content.</p>
<a href="../Functionality/removeList.php?id=<?php echo $id ?>" class="btn btn-danger text-white">Delete</a>
<?php require("../Includes/footer.php"); ?>