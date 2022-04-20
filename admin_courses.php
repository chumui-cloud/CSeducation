<?php
include('connection.php');
$query="SELECT id,name FROM courses";
$result=mysqli_query($conn,$query);
?>
<html>
    <table>
        <tr>
            <th>Course Name</th>
            <th>Update</th>
            <th>Remove</th>
        </tr>
    <?php
    while($row=mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><a href="update_course.php?course=<?php echo $row['id'];?>">Edit Course</a></td>
            <td><a href="delete_course.php?course=<?php echo $row['id'];?>">Delete Course</a></td>
        </tr>
    <?php    
    }
    ?>
    </table>
</html>