<?php

include "db_conn.php";

 ?>

 <!DOCTYPE html>
 <html>
    <head>
      <title>Booked Appointments</title>
      <link rel="stylesheet" type="text/css" href="login.css">
   </head>

   <style>
    table {
        width: 100%;
        border: 1px solid;
          }
    </style>

      <table>
          <th><tr>Booking ID</tr></th>
          <th><tr>Name</tr></th>
          <th><tr>Date</tr></th>
          <th><tr>Medical Notes</tr></th>


          <?php

          $sql = "SELECT * FROM bookings";
          $result = mysqli_query($conn, $sql);

          if($result && mysqli_num_rows($result) > 0)
          {
            while ($row = mysqli_fetch_assoc($result))
            {
              echo "<tr><td>" . $row["bookingID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["date_s"] . "</td><td>" . $row["notes"] . "</td></tr>";
            }
          }
            else
          {
            header("Location: doctor.php");
            exit();
          }
        ?>
    </table>
 </html>
