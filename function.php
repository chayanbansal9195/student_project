<?php
function showdetails($standard,$rollno){
    include('dbcon.php');
    $sql = "select * from student where rollno = '$rollno' and standard = '$standard'";
    $run = mysqli_query($con,$sql);

    if(mysqli_num_rows($run)>0){
        $data = mysqli_fetch_assoc($run);
        ?>
        <br><br>
        <table align="center" border="8">
        <tr>
        <th>roll no</th>
            <th>name</th>
            <th>city</th>
            <th>pcont</th>
            <th>standard</th>
            <th>image</th>
        </tr>
        <tr>
            <td><?php echo $data['rollno']?></td>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['city']?></td>
            <td><?php echo $data['pcont']?></td>
            <td><?php echo $data['standard']?></td>
            <td><img src="dataimg/<?php echo $data['image']?>" style="max-width:60px;" alt=""></td>
        </tr>
            
        </table>
        <?php
    }
    else{
        
        echo "<script>alert('no records found')</script>";
     
    }

}
?>