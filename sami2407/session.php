<?php

session_start();

echo "Username is ". $_SESSION["username"]."<br>";
echo "Email is ". $_SESSION["email"]."<br>";
?>