<?php
    include_once "connection.php";
    include_once "boo.php";
    $id= $_GET['id'];
   
$query= "SELECT * FROM form WHERE id= $id";
$data= mysqli_query($connection,$query);

    foreach($data as $value){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add</title>
</head>
<body>

    <form action="#" method="post">
        <input type="text" name="username" value="<?php echo($value['username'])?>"><br>
        <input type="password" name="password" value="<?php echo ($value['password'])?>"><br>
        <input type="submit" name="edit" class="btn btn-info mt-5" value="edit">
    </form>
    <?php
         }
    ?>
</body>
</html>

<?php
    if(isset($_POST['edit'])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $query= "UPDATE form SET  username= '$username', password='$password' WHERE id= $id ";
        $result= mysqli_query($connection, $query);

        if($result== true){
            header("Location: index.php");
        }else{
            echo("cannot edit");
        }
    }
?>
