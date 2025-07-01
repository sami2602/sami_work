<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="u_name" id="">
        <input type="file" name="pic" id="">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>

<?php
include("connect.php");
if (isset($_POST["btn"])) {
    $name= $_POST["u_name"];
    $type =$_FILES["pic"]["type"];
if (strtolower($type)== 'image/jpeg'
||strtolower($type)== 'image/jpg'
||strtolower($type)== 'image/png') {
    
    $imagename = $_FILES['pic']['name'];
    $target="img/".basename($imagename);
    if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
    $insert = "INSERT INTO `file_upload`(`name`, `image`) VALUES ('$name','$imagename')";
    $query=mysqli_query($con, $insert);
    if ($query) {
        echo"<script>window.location.href='view.php'</script>";
    }
}
}
}
?>