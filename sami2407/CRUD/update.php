<?php

include("connect.php");
$fetch = $_GET['updateID'];
$select="SELECT * FROM `aptechsite` WHERE `id`= '$fetch'";
$run = mysqli_query($con, $select);
$record = mysqli_fetch_assoc($run);

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $contact =$_POST['contact'];
    $email = $_POST['email'];
    $address =$_POST['address'];

    $_update = "UPDATE `aptechsite` SET `name`='$name',`contact`='$contact',`email`='$email',`address`='$address' WHERE `id`= '$fetch'";

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
        <input type="tel" name="contact" id="" value="<?php echo $record['contact'] ?>" placeholder="Enter Your Contact">
        <input type="email" name="email" id=""  value="<?php echo $record['email'] ?>"placeholder="Enter Your Email">
        <input type="text" name="address" id="" value="<?php echo $record['address'] ?>" placeholder="Enter Your Address">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>