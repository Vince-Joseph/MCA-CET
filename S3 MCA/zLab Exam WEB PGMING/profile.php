
<?php
    require("connection.php");

    $userid=(int)$_REQUEST['id'];
    $sql_insert_details = $db_connection->prepare(" INSERT INTO details
    (name,gender,address,dob,current_institute,qualification,reservation,concesion,user_id) VALUES(?,?,?,?,?,?,?,?,?) ");
    
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $institution=$_POST['institution'];
        $qualification=$_POST['qualification'];
        $reservation=$_POST['reservation'];
        $concesion=$_POST['concesion']?1:0;

        $sql_insert_details ->bind_param("sssssssii",$name,$gender,$address,$dob,$institution,$qualification,
        $reservation,$concesion,$userid);

        if($sql_insert_details->execute())
        {
            header("Location: details.php?id=$userid");
        }
        else
        {
            echo" <script> alert('Error happened !'); </script>";
        }
       // print_r($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab exam - 2021- VINCE JOSEPH</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main">
       
        <form action="" method="post">
            
        <table border="0" align="center" width="70%" class="shadow">
            <tr>
                <td colspan="2">
                    <h2 class="text-primary">Complete your profile</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">NAME</label>
                   
                </td>
                <td>
                     <input type="text" name="name" class="input-control" id="name" placeholder="Your Name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">GENDER</label>
                   
                </td>
                <td style="margin: 10px 0;">
                    Male <input type="radio" name="gender" id="gender" value="male" required>
                    Female <input type="radio" name="gender" value="female">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">ADDRESS</label>
                   
                </td>
                <td>
                     <textarea name="address" id="address" cols="30" rows="10" class="input-control-textarea"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">DOB</label>
                   
                </td>
                <td>
                     <input type="date" name="dob" class="input-control" id="dob" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="institution">CURRENT INSTITUTION</label>
                   
                </td>
                <td>
                     <input type="text" name="institution" class="input-control" id="institution" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="qualification">EDUCATIONAL QUALIFICATION</label>
                   
                </td>
                <td>
                     <input type="text" name="qualification" class="input-control" id="qualification" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="reservation">RESERVATION CATEGORY</label>
                   
                </td>
                <td>
                     <select name="reservation" id="reservation" class="input-control">
                        <option value="default" disabled="true" selected>Reservation category</option>
                         <option value="SC">SC</option>
                         <option value="ST">ST</option>
                         <option value="OBC">OBC</option>
                         <option value="GENERAL">General</option>
                     </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="concesion">FEE CONCESION</label>
                   
                </td>
                <td>
                     Yes<input type="radio" name="concesion" id="concesion" >
                     No<input type="radio" name="concesion">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="certificate">SSLC CERTIFICATE</label>
                   
                </td>
                <td>
                     <input type="FILE" name="certificate" class="input-control" id="certificate" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    Declaration
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <br>                    
                   <input type="checkbox" name="declaration" id="declaration" required>
                   I hereby declare that all the above informations are correct to my knowledge.
                </td>               
            </tr>
            <tr>
                
                <td><br>
                    <input type="reset" value="RESET" class="btn btn-danger">
                </td>
                <td><br>
                    <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
<?php
    $db_connection->close();
?>
