<?php
    include_once "connection.php";
    include_once "boo.php";
    $query="SELECT * FROM form";
    $data= mysqli_query($connection,$query);
   
        ?>
<table class="table table-bordered mt-5">
<a href="add.php" class="btn btn-success mt-5">to add</a>
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
             foreach($data as $rows){
        ?>
        <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['username']; ?></td>
            <td><?php echo $rows['password']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $rows['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a>
            </td>
        </tr>

<?php
             }
?>
       
</table>