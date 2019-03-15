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

    <form action="deletestudent.php" method="post" enctype="multipart/form-data">
        <table border="1" align="center">
            
            <tr>
            <th>Name</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
            <th>Standard</th>
                <td><input type="text" name="standard" required></td>
            </tr>
            <tr>
            
   <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
   </tr>
        </table>
    </form>
    <br><br><br>
    <table border="1" align="center">
            

            <tr>
            <th>No</th>
            <th>image</th>
            <th>Name</th>
            <th>Roll no</th>
            <th>Edit</th>  
            </tr>
            <?php
    
    if(isset($_POST['submit'])){
        include('../dbcon.php');
        $name=$_POST['name'];
        $standard =$_POST['standard'];  


        $query = "select * from student where standard='$standard' and  name like '%$name%' ";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run)<1){
            echo "No records found";
        }
        else{
            $count = 0;
            while($data = mysqli_fetch_assoc($run)){
                $count++;
                ?>
                <tr>
            <td><?php echo $count; ?></td>
            <td><img src="../dataimg/<?php echo $data['image']?>" style="max-width:100px;" alt=""></td>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['rollno']?></td>
            <td><a href="deleteform.php?sid=<?php echo $data['id'];?>" >Delete</a></td>  
            </tr>
            <?php
            }
            
        }
    }
    ?>


        </table>

    </body>
    </html>

    