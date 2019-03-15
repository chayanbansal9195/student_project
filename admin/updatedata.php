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
        $id = $_POST['sid'];
        echo "hello".$id;
        move_uploaded_file($tempname,"../dataimg/$image");
        $query = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$standard', `image` = '$image' WHERE `id` = '$id' ";
        $run = mysqli_query($con,$query);
        if($run==true){
            ?>
            <script> alert("Updated Successfully"); 
            window.open('updateform.php?sid=<?php echo $id;?>','_self') ;
            </script>
            <?php
    }
}
    ?>