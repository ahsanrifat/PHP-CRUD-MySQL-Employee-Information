<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="oth_heading">Edit Employee Information</div>
        <div class="btn">
            <span class="oth_btn"><a id="link" href="insert.php">Insert Employee Data</a></span>
            <span class="oth_btn"><a id="link" href="edit.php">Edit Employee Data</a></span>
        </div>


        <form id="frm" action="edit-db-process.php" method="POST" enctype="multipart/form-data">


            <?php
        $id= $_GET['next_id']; 
        include 'db.php';
        
        $sql = "select * FROM employee where emp_id=".$id;
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "
                <input class='form-field' type='text' name='name' value='".$row['name']."'><br>
                <input class='form-field' type='date' name='join_date'value='".$row['joining_date']."'><br>
                <input class='form-field' type='text' name='email'value='".$row['email']."'><br>
                <input class='form-field' type='text' name='manager'value='".$row['manager']."'><br>
                <input class='form-field' type='text' name='salary'value='".$row['salary']."'><br>
                <input class='form-field' type='text' name='mobile'value='".$row['mobile']."'><br>
    
                <select class='form-field' name='depertment'>
    
                    <option value='".$row['depertment']."'>".$row['depertment'] . "</option>
    
                    <option value='IT'>IT</option>
    
                    <option value='HR'>HR</option>
    
                    <option value='Finance'>Finance</option>
    
                    <option value='Sales'>Sales</option>
    
                </select>
    
                <select class='form-field' name='position'>
    
                    <option value='".$row['position']."'>".$row['position'] . "</option>
    
                    <option value='Executive Head'>Executive</option>
    
                    <option value='Manager'>Manager</option>
    
                    <option value='General Manager'>General Manager</option>
    
                    <option value='Managing Director'>Managing Director</option>
    
                </select><br>
    
                <span class='form-field'><b>Edit Photo</b><br>
                </span> <span><img id='tbl-img' src=".$row["Image"]."></span>
                <input type='hidden' name='image' value='".$row["Image"]."'/>
                <input type='hidden' name='empid' value='".$row["emp_id"]."'/>
                <input class='form-field' type='file' name='picture' placeholder='Select Photo' value=".$row["Image"]."><br>
    
                <br>
    
    
    
                <input class='form-field'
                    style='border: 4px solid #07006A; background-color:  teal; color: white; width:20%; height:50px;'
                    type='submit' value='Edit Employee' />

                    </form>
                
                ";
            }
        }
        ?>


    </body>