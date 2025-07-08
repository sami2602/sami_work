<?php
// servername=localhost
// username=root
// password=""
// database name= dbname

$conn = mysqli_connect("localhost","root","","crud_2407");

if (mysqli_connect_errno()) {
    printf("",mysqli_connect_errno());
    exit(1);
}

?>