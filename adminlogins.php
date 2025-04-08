<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$adminN = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($adminN)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM adminU WHERE admin_name='$adminN' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['admin_name'] === $adminN && $row['password'] === $pass) {
            	$_SESSION['admin_name'] = $row['admin_name'];
            	$_SESSION['password'] = $row['pass'];
            	$_SESSION['id'] = $row['id'];

            	header("Location: admin.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: adminlog.php");
	exit();
}
