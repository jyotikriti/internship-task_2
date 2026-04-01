<?php include 'connection.php';
$s_id=$_GET['s_id'];
$query="Delete FROM student WHERE s_id='$s_id'";
$data=mysqli_query($con,$query);
if($data)
{
    ?>
    <script type="text/javascript">
        alert("data deleted successfully");
        window.open("http://localhost/my%20project/view.php","_self");
        </script>
        <?php
}
else
{
    ?>
        <script type="text/javascript">
        alert("please try again");
        </script>
    <?php
}