<?php

include('db_conn.php');
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    // echo $id;
    $sql_delete="Delete from `users` where id=$id";
    $result=mysqli_query($conn ,$sql_delete);
    if($result){
        echo "<script>alert('Record deleted successfully')</script>";
        echo "<script>window.open('display.php','_self')</script>";
    }else{
        die(mysqli_error($conn ));
    }
}

?>
