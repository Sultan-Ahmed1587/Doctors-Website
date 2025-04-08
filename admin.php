<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['admin_name'])) {

include "db_conn.php";

 ?>
<!DOCTYPE html>
<html>

      <head>
          <title>Home</title>
          <link rel="stylesheet" type="text/css" href="login.css">
      </head>

      <body>
          <h1>Hello, <?php echo $_SESSION['admin_name']; ?></h1>
          <h1>Would you like to enter in a new doctor?</h1><br>


          <a href="docsignup.php">Create a doctor account?</a>
          <a href="display.php">Display Users</a>
          <a href="logout.php">Logout</a>
      </body>


</html>
<?php
}else{
    header("Location: adminlog.php");
    exit();
}
 ?>
