<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
          <title></title>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="text" name="firstname"
                placeholder="firstname"> <br><br>

                <input type="text" name="lastname"
                placeholder="lastname"> <br><br>

                <input type="text" name="age"
                placeholder="age"> <br><br>

                <input type="submit" name="save_btn" value="save">
                <button><a href="view.php">view</a></button>

            </form>
        </div>
        <?php
        if(isset($_POST['save_btn']))  {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];


        $query="INSERT INTO student (firstname,lastname,age) 
        VALUES('$fname',' $lname','$age')";
        $data=mysqli_query($con,$query);
        if($data)
        {
            ?>
            <script type="text/javascript">
                alert("Data saved successfully");
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

    </body>
    </html>