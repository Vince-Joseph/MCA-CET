<?php
    require("connection.php");

    $sql_get_user = $db_connection->prepare(" SELECT id  FROM USER WHERE USER_NAME=? AND PASSWORD=? ");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB EXAM 2021 - VINCE JOSEPH</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="main  shadow">
        <?php

        if(isset($_POST['login']))
        {
            $username=$_POST['user_name'];
            $password=$_POST['password'];

             $sql_get_user ->bind_param("ss",$username,$password);
            if($sql_get_user ->execute())
            {
                $result=$sql_get_user ->get_result();
                //$row=$result->fetch_assoc();
        
                if($result->num_rows>0)
                {
                    $row=$result->fetch_assoc();
                    $id=$row['id'];
                    header("Location: profile.php?id=$id");
                }
                else
                {
                ?>
                    <h2 class="text-danger center"> Invalid username or password !</h2>
                <?php
                }
        
            }
            else
            {
                echo" <script> alert('Error happened !'); </script>";
            }
        }
           
        ?>

        <div class="center">
            <form action="" method="post" class="">
                <br><br>
                <h2 class="text-primary">User Login</h2>
                <div class="form-control">
                    <label for="">User Name: </label>
                    <input type="text" class="input-control" name="user_name">
                </div>
                <div class="form-control">
                    <label for="">Password:&nbsp;&nbsp;&nbsp; </label>
                    <input type="password" class="input-control" name="password">
                </div>
                <br><br>
                <div class="form-control">
                    <!-- <input type="reset" class="btn btn-danger"> -->
                    <input type="submit" class="btn btn-primary" value="LOGIN" name="login">
                </div>
                <br><br>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    $db_connection->close();
?>

