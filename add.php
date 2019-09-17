<?php
    include_once "connection.php";
    include_once "boo.php";
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
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="create" class="btn btn-info mt-5" value="create">
    </form>
</body>
</html>

<?php
    if(isset($_POST['create'])){
        $username= $_POST['username'];
        $password= md5($_POST['password']);

        $query= mysqli_query($connection, " INSERT INTO form(username, password) 
        VALUES('$username','$password')");
        if($query == true){
            header("Location: index.php");
        }else{
            echo("cannot create");
        }

            }
?>