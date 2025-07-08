<?php

include("connect.php");
$fetch = $_GET['updateID'];
$select="SELECT * FROM `file_upload` WHERE `id`= '$fetch'";
$run = mysqli_query($con, $select);
$record = mysqli_fetch_assoc($run);

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $image =$_POST['image'];
 

    $_update = "UPDATE `file_upload` SET ,`name`='$name',`image`='$image' WHERE `id`= '$fetch'";

    $run =mysqli_query ($con,$_update);

    if ($run) {
        echo"<script>window.location.href='view.php'</script>";
    }
    else {
        echo "Data Not Inserted";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method=POST>
        <input type="text" name="name" id="" value="<?php echo $record['name'] ?>" placeholder="Enter Your Name">
        <input type="image" src="img/<?php echo $record['image'] ?>" height="100px" width="100px" alt="">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>