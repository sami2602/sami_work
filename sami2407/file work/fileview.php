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
            <th>image</th>
            
        </tr>
    </thead>


<tbody>

<?php
include("connect.php");
$select="SELECT * FROM `file_upload`";
$run= mysqli_query($con, $select);
while($record= mysqli_fetch_assoc($run)){?>


<tr>
    <td><?php echo $record['id'] ?></td>
    <td><?php echo $record['name'] ?></td>
    <td><img src="img/<?php echo $record['image'] ?>" height="100px" width="100px" alt=""> </td>
    <td><a href="fileupdate.php?updateID=<?php echo $row['id'] ?>">Update</a></td>
    <td><a href="filedelete.php?delID=<?php echo $row['id'] ?>">Delete</a></td>
</tr>

<?php
}

?>
</tbody>
</table>
</body>
</html>