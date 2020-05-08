<?php
  $result = GetLists($conn); 
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">List</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td class="text-right">
                <a class="btn btn-success">Tasks</a>
                <a class="btn btn-warning">Edit</a>
                <a class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
        <tr>
        </tr>
    </tbody>
</table>