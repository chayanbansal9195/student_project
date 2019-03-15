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
    <title>Admin Dashboard</title>
</head>
<body>
    <h1 align="center">Admin DashBoard</h1>
    <h3 align="right"><a href="../logout.php" >Logout</a></h3>
    <table border="1" style="width:50%" align="center">
        <tr>
        <td>1. </td><td align="center"><a href="addstudent.php">Insert Student Detail</a></td>
        </tr>
        <tr>
        <td>2. </td> <td align="center"><a href="updatestudent.php">Update Student Detail</a></td>
        </tr>
        <tr>
        <td>3. </td>  <td align="center"><a href="deletestudent.php">Delete Student Detail</a></td>
        </tr>
    </table>
</body>
</html>