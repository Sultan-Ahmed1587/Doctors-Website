<?php
include('db_conn.php');
if(isset($_GET['update_id'])){
    $uid=$_GET['update_id'];
    // selecting data from database table,so that we can display in input fields
    $select_query="Select * from `users` where id='$id'";
    $result_query=mysqli_query($conn ,$select_query);
    $row=mysqli_fetch_assoc($result_query);
    $user_namedisplay=$row['user_name'];
    $passworddisplay=$row['password'];
    $namedisplay=$row['name'];
    $addresdisplay=$_POST['address'];
    $teledisplay=$row['tele'];
    $medicalHdisplay=$_POST['medicalH'];
    // echo $userdisplay;
    if(isset($_POST['update'])){
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $tele=$_POST['tele'];
        $medicalH=$_POST['medicalH'];

        // updating new data inside database table.
        $update_query="update `users` set user_name='$user_name',password='$password',name='$name',address='$address',tele='$tele',medicalH='$medicalH' where id=$id";
        $result_query=mysqli_query($conn,$update_query);
        if($result_query){
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script>window.open('display.php','_self')</script>";
        }else{
            die(mysqli_error($conn));
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <!-- bootstarp css link -->
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- username field -->
           <div class="form-group mb-3">
               <label>User Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your username" name="user_name" value="<?php  echo $user_namedisplay ?>" class="form-control">
           </div>

           <!-- password field -->
           <div class="form-group mb-3">
               <label>password</label>
               <input type="pass" required="required" autocomplete="off" placeholder="Enter your new Password" name="password" value="<?php  echo $passworddisplay ?>" class="form-control">
           </div>

           <!-- email field -->
           <div class="form-group mb-3">
               <label>Name</label>
               <input type="name" required="required" autocomplete="off" placeholder="Enter your name" name="name" value="<?php  echo $namedisplay ?>" class="form-control">
           </div>

           <!-- Mobile filed -->
           <div class="form-group mb-3">
              <label>Address</label>
              <input type="text" required="required" autocomplete="off" placeholder="Enter your address" name="address" value="<?php  echo $addressdisplay ?>" class="form-control" minLength="10" maxLength="10">
          </div>

            <!-- Mobile filed -->
            <div class="form-group mb-3">
               <label>Mobile number</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your mobile number" name="mobile" value="<?php  echo $teledisplay ?>" class="form-control" minLength="10" maxLength="10">
           </div>

           <!-- Mobile filed -->
           <div class="form-group mb-3">
              <label>Medical history</label>
              <input type="text" required="required" autocomplete="off" placeholder="Enter your Medical History" name="mobile" value="<?php  echo $medicalHdisplay ?>" class="form-control" minLength="10" maxLength="10">
          </div>

           <!-- update button -->
           <button class="btn btn-dark mt-3" type="submit" name="update">Update</button>
       </form>
   </div>
</body>
</html>
