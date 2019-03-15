<?php

session_start();
if($_SESSION['uid']){
   
}
else
{
 header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
</head>
<body>
    <h1 align="center">Update Student</h1>
    <h3 align="right"><a href="../logout.php" >Logout</a></h3>
    <h3 align="left"><a href="admindash.php" >Admin DashBoard</a></h3>

    <?php 
        include ('../dbcon.php');

        $sid = $_GET['sid'];
        $sql = "select * from student where id = '$sid'";
        $run = mysqli_query($con,$sql);
        $data = mysqli_fetch_assoc($run);

    ?>
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
            <th>Roll no</th>
                <td><input type="text" name="rollno" value = "<?php echo $data['rollno']; ?>" ></td>
            </tr>
            <tr>
            <th>Name</th>
                <td><input type="text" name="name" value = "<?php echo $data['name']; ?>" ></td>
            </tr>
            <tr>
            <th>City</th>
                <td><input type="text" name="city" value = "<?php echo $data['city']; ?>"></td>
            </tr>
            <tr>
            <th>Parent Contact</th>
                <td><input type="text" name="pcont" value = "<?php echo $data['pcont']; ?>"></td>
            </tr>
            <tr>
            <th>Standard</th>
                <td><input type="text" name="standard" value = "<?php echo $data['standard']; ?>"></td>
            </tr>
            <tr>
            <th>Profile Image</th>
                <td><input type="file" name="image" title = "<?php echo $data['image']; ?>" ></td>
            </tr>
            <tr>
            
   <td align="center" colspan="2">
   <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
   <input type="submit" name="submit" value="Update Student"></td>
   </tr>
        </table>
    </form>

    </body>
    </html>

    