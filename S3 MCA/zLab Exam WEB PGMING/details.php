<?php
    require("connection.php");
    //$sql_get_id=$db_connection->prepare(" SELECT id  FROM details WHERE id=? ");
    $sql_get_user = $db_connection->prepare(" SELECT *  FROM details WHERE user_id=? ");
    $sql_get_user->bind_param("i",$_REQUEST['id']);

    if($sql_get_user->execute())
    {
        $result=$sql_get_user->get_result();
        $row=$result->fetch_assoc();
        //print_r($row);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab exam - VINCE JOSEPH</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main">
        <div class="center">
             <h2 class="text-success">Registration succesfull !</h2>
             
        </div>
       <table border="0" align="center" width="70%" class="shadow" cellspacing="15">
            <tr>
                <td colspan="2">
                    <h2 class="text-primary">Details</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">NAME</label>
                   
                </td>
                <td>
                     <?php echo $row['name']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">GENDER</label>
                   
                </td>
                <td style="margin: 10px 0;">
                    <?php echo $row['gender']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">ADDRESS</label>
                   
                </td>
                <td>
                    <?php echo $row['address']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">DOB</label>
                   
                </td>
                <td>
                    <?php echo $row['dob']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="institution">CURRENT INSTITUTION</label>
                   
                </td>
                <td>
                    <?php echo $row['current_institute']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="qualification">EDUCATIONAL QUALIFICATION</label>
                   
                </td>
                <td>
                    <?php echo $row['qualification']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="reservation">RESERVATION CATEGORY</label>
                   
                </td>
                <td>
                    <?php echo $row['reservation']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="concesion">FEE CONCESION</label>
                   
                </td>
                <td>
                    <?php echo $row['concesion']?"Applicable":"Not applicable"; ?>
                </td>
            </tr>
            
        </table>
    </div>
</body>
</html>