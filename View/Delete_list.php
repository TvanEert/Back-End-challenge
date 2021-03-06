<?php
    require('../includes/connection.php'); 
    
    require('../Statements/list_statements.php');
    $result = GetList($conn, $_GET['id']);

    include("../Includes/header.php");
?>

<h2 class="display-4">Delete list</h2>
<p>Are you sure you want to delete the list <b><?php echo $result['name'] ?></b> and all of its content.</p>
<a href="../Functionality/remove_list.php?id=<?php echo $_GET['id'] ?>" class="btn btn-danger text-white">Delete</a>
<?php include("../Includes/footer.php"); ?>