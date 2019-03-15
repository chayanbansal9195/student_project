<?php
session_start();
if(isset($_SESSION['uid']))
header('location:admin/admindash.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    <h1 align="center">Admin Login</h1>
   <!-- form -->
   <form action="login.php" method="post">
   <table style="width:30%" align="center" border="1">
   <tr>
   <td colspan="2" align="center">Login</td>
   </tr>
   <tr>
   <td align="left">UserName</td>
   <td><input type="text" name="username"></td>
   <tr>
   <td align="left">Password</td>
   <td><input type="password" name="password" ></td>
   </tr>
   <tr>
   <td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
   </tr>

   </table> 
   </form>
</body>
</html>

<?php

include ('dbcon.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "Select * from admin where username ='$username' and password = '$password'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row<1){
        ?>
            <script>alert("Username or password not match!!")</script>
            window.open('login.php','_self')
        <?php
    }
    else{
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];

        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}

?>