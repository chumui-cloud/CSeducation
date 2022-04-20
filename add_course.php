Add input fields according to your need. and modify database table 
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $intro=$_POST['introduction'];
    $description=$_POST['description'];
    $sample=$_POST['sample'];
    $explanation=$_POST['explanation'];
    $query="INSERT INTO courses(name,introduction,description,sample,explanation) VALUES('$name','$intro','$description','$sample','$explanation')";
    include('connection.php');
    mysqli_query($conn,$query);
}
?>
<html>
    <form method="POST">
        <div>
            <label>Course Name:</label>
            <input type="text" name="name" id="" required>
        </div>
        
        <div>
            <label>Introducton:</label>
            <input type="textarea" name="introduction" id="" required>
        </div>
        
        <div>
            <label>Description:</label>
            <input type="textarea" name="description" id="" required>
        </div>
        
        <div>
            <label>Sample Code:</label>
            <input type="textarea" name="sample" id="" required>
        </div>
        
        <div>
            <label>Explanation</label>
            <input type="text" name="explanation" id="" required>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</html>