<?php
    include_once "connection.php";
    include_once "boo.php";
    $id= $_GET['id'];
   
     $query= mysqli_query($connection, " DELETE FROM form WHERE id= $id");
if($query == true){
    header("Location: index.php");
}else{
    echo("cannot delete");
}

?>