<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['doctor_name'])) {

include "db_conn.php";

 ?>
<!DOCTYPE html>
<html>

      <head>
          <title>Home</title>
          <link rel="stylesheet" type="text/css" href="login.css">
      </head>

      <body>
          <h1>Hello, Dr <?php echo $_SESSION['doctor_name']; ?></h1>
          <a href="logout.php">Logout</a>
      </body>
      <article id="main-col">
        <h1 class="page-title">Appointments <?php echo $_SESSION['name']; ?><br></h1>
        <li><a href="bk.php">Appointments Booking</a></li>

      </article>


</html>
<?php
}else{
    header("Location: doclog.php");
    exit();
}
 ?>
