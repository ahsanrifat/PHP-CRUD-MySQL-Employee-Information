<?php
$id= $_GET['next_id']; 
include 'db.php';
$sql = "delete FROM employee where emp_id=".$id;

if(mysqli_query($mysqli,$sql)){

    header("Location: edit.php");
    
}
else{
    echo '<script>alert('.$mysqli -> error.')</script>';
    // header("Location: insert.php");
}


// header("Location: edit.php");
?>