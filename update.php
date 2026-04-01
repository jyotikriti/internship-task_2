<?php include 'connection.php'; 
 $s_id=$_GET['s_id'];
 $select="SELECT * FROM student WHERE s_id='$s_id'";
 $data=mysqli_query($con,$select);
 $row=mysqli_fetch_array($data);
?>
<div>
            <form action="" method="POST">
                <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname"
                placeholder="firstname"> <br><br>

                <input value="<?php echo $row['Lastname'] ?>" type="text" name="lastname"
                placeholder="lastname"> <br><br>

                <input value="<?php echo $row['age'] ?>"type="text" name="age"
                placeholder="age"> <br><br>

                <input type="submit" name="update_btn" value="update">
                <button><a href="view.php">Back</a></button>

            </form>
        </div>
         <?php
        if(isset($_POST['update_btn']))  {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];


        $update="UPDATE student SET firstname='$fname',lastname='$lname',age='$age' WHERE s_id='$s_id'";
        $data=mysqli_query($con,$update);
        if($data)
        {
            ?>
            <script type="text/javascript">
                alert("Data updated successfully");
                window.open("http://localhost/my%20project/view.php","_self");
                </script>
                <?php
        }
        else{
           ?>
            <script type="text/javascript">
                alert("please try again");
                </script>
                <?php
        }
         
        }
        ?>