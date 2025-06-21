<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>


<tbody>

<?php
include("connect.php");
$select="SELECT * FROM `aptechsite`";
$run= mysqli_query($con, $select);
while($row= mysqli_fetch_assoc($run)){?>


<tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['contact'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['address'] ?></td>
</tr>

<?php
}

?>
</tbody>
</table>
</body>
</html>