<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
        
    $name = $mysqli -> real_escape_string($_POST['name']);
    $date = $mysqli -> real_escape_string($_POST['join_date']);
    $email = ($_POST['email']);
    $manager = $mysqli -> real_escape_string($_POST['manager']);
    $salary = $mysqli -> real_escape_string($_POST['salary']);
    $mobile =($_POST['mobile']);
    $depertment = $mysqli -> real_escape_string($_POST['depertment']);
    $position = $mysqli -> real_escape_string($_POST['position']);

     //changing image name
    
     $image=$_FILES['picture']['name'];

     if ($image==""){
         $image=($_POST['image']);
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

    $sql = "delete FROM employee where emp_id=".$_POST['empid'];
    if(mysqli_query($mysqli,$sql)){

        $insert="INSERT INTO `employee` (`name`,`joining_date`, `email`,  `manager`, `salary`, `mobile`, `depertment`,`position`,`image`)           
        VALUES ('$name', '$date', '$email', '$manager', '$salary', '$mobile','$depertment','$position','$image')";
        

        if(!mysqli_query($mysqli,$insert)){
            echo $mysqli -> error;
        }else{
            header("Location: edit.php");
            echo $image;
        }
    
    }
    else{
        echo $mysqli -> error;
        // header("Location: insert.php");
    }
}   
//      
     
//      $imagetype=end($extension);
     
//      $fileNewName=rand(1000,999999).".".$imagetype;

//      echo $fileNewName;
//      echo '<br>';
     
//      $avatar_path =$mysqli->real_escape_string('image/'.$fileNewName);

//      echo $avatar_path;

//      if(preg_match(("!image!"),$_FILES['picture']['type'])){ //making sure fie is image
        
//         //copy image to folder
        
//         if(copy($_FILES['picture']['tmp_name'],$avatar_path)){
       
//             $insert="INSERT INTO `employee` (`name`,`joining_date`, `email`,  `manager`, `salary`, `mobile`, `depertment`,`position`,`image`) 
//             VALUES ('$name', '$date', '$email', '$manager', '$salary', '$mobile','$depertment','$position','$avatar_path')";
            

//             if(mysqli_query($mysqli,$insert)){

//                 header("Location: insert.php");
                
//             }
//             else{
//                 echo '<script>alert('.$mysqli -> error.')</script>';
//                 header("Location: insert.php");
//             }
//         }
        
//     }else{
        
//         echo 'not an image.';
//     }

// } 
   
        
    ?>