<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method=POST>
        <input type="text" name="name" id="" placeholder="Enter Your Name">
        <input type="tel" name="contact" id="" placeholder="Enter Your Contact">
        <input type="email" name="email" id="" placeholder="Enter Your Email">
        <input type="text" name="address" id="" placeholder="Enter Your Address">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>

<?php

include("connect.php");

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $contact =$_POST['contact'];
    $email = $_POST['email'];
    $address =$_POST['address'];

    $_insert = "INSERT INTO `aptechsite`( `name`, `contact`, `email`, `address`) VALUES ("$name",$contact,$email,$address)";

    $run =mysqli_query ($con,$_insert);

    if ($run) {
        echo "Data Inserted";
    }
    else {
        echo "Data Not Inserted";
    }



}
?>