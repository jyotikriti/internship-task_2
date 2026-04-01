<?php include 'connection.php'; ?>
<a href="index.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>first name</th>
        <th>last name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    $query="SELECT * FROM student";
    $data=mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    if($result) {
     while ($row=mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['Lastname']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><a href="update.php?s_id=<?php echo $row['s_id']; ?>">Edit</a>
                </td>
                 <td><a onclick="return confirm('are you sure you want to delete')" href="delete.php?s_id=<?php echo $row['s_id']; ?>">Delete</a>
                </td>
        </tr>
        <?php
     }
      }
    else
    {
    ?>
    <tr>
            <td>No Record Found</td>
        </tr>
    <?php 
    }
     ?>    
    
</table>