<?php
    
   
        include('../dbcon.php');
       
        $id = $_REQUEST['sid'];
        echo $id;
        $query = "delete from student where id='$id'";
        $run = mysqli_query($con,$query); 
        if($run==true){     
            ?>
            <script> alert("Deleted Student Successfully"); 
            window.open('deletestudent.php','_self') ;
            </script>
            <?php
    }

    ?>