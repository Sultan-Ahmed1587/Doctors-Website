 <?php

session_start();

include "db_conn.php";


#echo "it is working";


    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $Pname = validate($_POST["Name"]);
    $dates = validate($_POST["dates"]);
    $notes = validate($_POST["notes"]);
    echo $dates, $notes;


    $user_data = 'Name='. $Pname. 'dates='. $dates. '&notes='. $notes;


          $sql2 = "INSERT INTO bookings(Name, date_s, notes) VALUES('$Pname', '$dates', '$notes')";
          $result2 = mysqli_query($conn, $sql2);


{
  header("Location: home.php");
  exit();
}

 ?>
