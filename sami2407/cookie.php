<?php
// setcookie("product","Microwave Oven");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

//  if (isset($_COOKIE['product'])) {
//     echo "Cookies are enabled";
//  }
//  else {
//     echo "Cookies are not enabled";
//  }


session_start();
$_SESSION["username"]= "sami";
$_SESSION["email"]= "sami@gmail.com"

?>

<h1>Session Stored</h1>
<a href="session.php">Click Here To See</a>


</body>
</html>
