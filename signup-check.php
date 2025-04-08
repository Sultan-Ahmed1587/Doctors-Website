
<?php

session_start();

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $address = validate($_POST['address']);
    $tele = validate($_POST['tele']);
    $medh = validate($_POST['medh']);

    $user_data = 'uname='. $uname. '&name='. $name;

    if (empty($uname)) {
          header("Location: signup.php?error=User Name is required&$user_data");
        exit();

    }else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    }

    else if(empty($re_pass)){
        header("Location: signup.php?error=Re-Enter Password is required&$user_data");
        exit();
    }

    else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    }

    else if($pass !== $re_pass){
        header("Location: signup.php?error=Passwords do not match&$user_data");
        exit();
    }

    else if(empty ($address)){
        header("Location: signup.php?error=Telephone is required&$user_data");
        exit();
    }

    else if(empty ($tele)){
        header("Location: signup.php?error=Telephone is required&$user_data");
        exit();
    }

    else if(empty ($medh)){
        header("Location: signup.php?error=Telephone is required&$user_data");
        exit();
    }

    else{

      

      $sql = "SELECT * FROM users WHERE user_name='$uname'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          header("Location: signup.php?error=The UserName is already taken&$user_data");
          exit();
      }else {
          $sql2 = "INSERT INTO users(user_name, password, name, address, tele, medicalH) VALUES('$uname', '$pass', '$name', '$address', '$tele', '$medh')";
          $result2 = mysqli_query($conn, $sql2);

          if ($result2) {
          header("Location: signup.php?success=Your account has been created");
                exit();

          }else {
                  header("Location: signup.php?error=unknown error occurred&$user_data");
                  exit();
                }
            }


          }

}else{
  header("Location: login.php");
  exit();
}

 ?>
