<?php
include("connect.php");
$fetch= $_GET['delID'];
$delete= "DELETE FROM `file_upload` WHERE `file_upload`.`id`=$fetch";
$run = mysqli_query($conn, $delete);
    echo"<script>window.location.href='view.php'</script>";


?>
<script>window.location.href='view.'</script>