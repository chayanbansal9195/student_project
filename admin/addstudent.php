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
    <title>Add New Student</title>
</head>
<body>
    <h1 align="center">Add New Student</h1>
    <h3 align="right"><a href="../logout.php" >Logout</a></h3>
    <h3 align="left"><a href="admindash.php" >Admin DashBoard</a></h3>

    <form action="addstudent.php" method="post" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
            <th>Roll no</th>
                <td><input type="text" name="rollno" required></td>
            </tr>
            <tr>
            <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
            <th>City</th>
                <td><input type="text" name="city" required></td>
            </tr>
            <tr>
            <th>Parent Contact</th>
                <td><input type="text" name="pcont" required></td>
            </tr>
            <tr>
            <th>Standard</th>
                <td><input type="text" name="standard" required></td>
            </tr>
            <tr>
            <th>Profile Image</th>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr>
   <td align="center" colspan="2"><input type="submit" name="submit" value="Add"></td>
   </tr>
        </table>
    </form>
    </body>
    </html>

    <?php
    
    if(isset($_POST['submit'])){
        include('../dbcon.php');
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $pcont =$_POST['pcont'];
        $standard =$_POST['standard'];  
        $image = $_FILES['image'] ['name'];
        $tempname = $_FILES['image']['tmp_name'];

        move_uploaded_file($tempname,"../dataimg/$image");

        $query = "INSERT INTO student(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcont','$standard','$image')";
        $run = mysqli_query($con,$query);
        if($run){
            
        }
    }
    ?>