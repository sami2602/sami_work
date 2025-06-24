<?php
include("connect.php");
$fetch= $_GET['deleteID'];
$delete= "DELETE FROM `aptechsite` WHERE `aptechsite`.`id`=$fetch";
$run = mysqli_query($con, $delete);
    echo"<script>window.location.href='view.php'</script>";


?>