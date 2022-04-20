<?php
include('connection.php');
if (isset($_POST['update'])) {
    $id = $_GET['course'];
    $name = $_POST['name'];
    $intro = $_POST['introduction'];
    $description = $_POST['description'];
    $sample = $_POST['sample'];
    $explanation = $_POST['explanation'];
    $query = "UPDATE courses SET name='$name', introduction='$intro', description='$description', sample='$sample', explanation='$explanation' WHERE id=$id";
    if(mysqli_query($conn, $query))
    echo "successful";

}
$id = $_GET['course'];
$query = "SELECT * FROM courses WHERE id=$id";
$row = mysqli_fetch_array(mysqli_query($conn, $query));
?>
<html>
<form method="POST">
    <div>
        <label>Course ID:</label>
        <input type="text" name="id" id="" value=<?php echo $id; ?> disabled>
    </div>
    <div>
        <label>Course Name:</label>
        <input type="text" name="name" id="" value=<?php echo $row['name']; ?> required>
    </div>

    <div>
        <label>Introducton:</label>
        <input type="textarea" name="introduction" id="" value=<?php echo $row['introduction']; ?> required>
    </div>

    <div>
        <label>Description:</label>
        <input type="textarea" name="description" id="" value=<?php echo $row['description']; ?> required>
    </div>

    <div>
        <label>Sample Code:</label>
        <input type="textarea" name="sample" id="" value="<?php echo $row['sample']; ?>" required>
    </div>

    <div>
        <label>Explanation</label>
        <input type="text" name="explanation" id="" value=<?php echo $row['explanation']; ?> required>
    </div>
    <input type="submit" value="update" name="update">
</form>

</html>