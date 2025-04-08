<?php include('db_conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <!-- bootstarp css link -->
</head>
<body>


<tbody>
    <?php
    $select_query="Select * from `users`";
    $result=mysqli_query($conn ,$select_query);
    $i=1;
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
$user_name=$row['user_name'];
$name=$row['name'];
$address=$row['address'];
$tele=$row['tele'];
$medicalH=$row['medicalH'];
echo " <tr>
<td>$i</td>
<td>$user_name</td>
<td>$name</td>
<td>$address</td>
<td>$tele</td>
<td>$medicalH</td>
<td class='text-center'>
<button class='btn btn-dark'><a href='update.php?update_id=$id' class='text-light text-decoration-none'>Update</button>
<button class='btn btn-danger'><a href='delete.php?delete_id=$id' class='text-light text-decoration-none'>Delete</button>
</td>
</tr>";
$i++;
        }

    }else{
        die(mysqli_error($con));
    }
?>
</tbody>
</table>
</div>
</body>
</html>
