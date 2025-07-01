<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="pic" id="">
        <button type="submit">Submit</button>
    </form>

<?php
error_reporting(0);

$pic=$_FILES['pic'];

echo"<pre>";
print_r($pic);
echo "</pre>";

?>

</body>
</html>