<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>

      <head>
          <title>Home</title>
          <link rel="stylesheet" type="text/css" href="login.css">
      </head>

      <body>
        <form action="bookings.php" method="post">
              <h2>Book an Appointment</h2>

              <label>Patients Name</label>
              <input type="text"
                     name="Name"
                     placeholder="Patient Name"><br>

              <label>Date</label>
              <input type="date"
                     name="dates"
                     placeholder="Date"><br>

              <label>Patients Notes</label>
              <input type="text"
                     name="notes"
                     placeholder="Inform the Doctor"><br>

              <button type="Submit">Submit</button>
        </form>
      </body>

</html>
<?php
}else{
    header("Location: login.php");
    exit();
}
 ?>
