<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
        
    $name = $mysqli -> real_escape_string($_POST['name']);
    $date = $mysqli -> real_escape_string($_POST['join_date']);
    $email = ($_POST['email']);
    $manager = $mysqli -> real_escape_string($_POST['manager']);
    $salary = $mysqli -> real_escape_string($_POST['salary']);
    $mobile = ($_POST['mobile']);
    $depertment = $mysqli -> real_escape_string($_POST['depertment']);
    $position = $mysqli -> real_escape_string($_POST['position']);

     //changing image name
    
     $image=$_FILES['picture']['name'];

     if ($image==""){
         $image="image/default.png";
     }
     else{
        $extension=explode(".",strtolower($image));
        $imagetype=end($extension);
        $fileNewName=rand(1000,999999).".".$imagetype;
        $avatar_path =$mysqli->real_escape_string('image/'.$fileNewName);
        if(preg_match(("!image!"),$_FILES['picture']['type'])){
            if(copy($_FILES['picture']['tmp_name'],$avatar_path)){
                $image=$avatar_path;
            }
            else{
                $image=($_POST['image']);
            }
        }
        else{
            $image=($_POST['image']);
        }
     }
     $insert="INSERT INTO `employee` (`name`,`joining_date`, `email`,  `manager`, `salary`, `mobile`, `depertment`,`position`,`image`)           
        VALUES ('$name', '$date', '$email', '$manager', '$salary', '$mobile','$depertment','$position','$image')";
        

        if(!mysqli_query($mysqli,$insert)){
            echo $mysqli -> error;
        }else{
            header("Location: view.php");
        }
    
    }
        
    ?>