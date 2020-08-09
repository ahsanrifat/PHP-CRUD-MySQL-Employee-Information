<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        include 'db.php';
    ?>
        <div id="oth_heading">Insert Employee Information</div>
        <div class="btn">
            <span class="oth_btn"><a id="link" href="view.php">View All Employee Data</a></span>
            <span class="oth_btn"><a id="link" href="edit.php">Edit Employee Data</a></span>
        </div>
        <form id="frm" action="insert-db.php" method="POST" enctype="multipart/form-data">

            <input class='form-field' type="text" name="name" placeholder="Enter Name"><br>
            <input class='form-field' type="date" name="join_date" placeholder="Enter Joining Date"><br>
            <input class='form-field' type="text" name="email" placeholder="Enter Email"><br>
            <input class='form-field' type="text" name="manager" placeholder="Enter Manager Name"><br>
            <input class='form-field' type="text" name="salary" placeholder="Enter Salary"><br>
            <input class='form-field' type="text" name="mobile" placeholder="Enter Mobile Number"><br>

            <select class='form-field' name="depertment">

                <option value="">Depertment</option>

                <option value="IT">IT</option>

                <option value="HR">HR</option>

                <option value="Finance">Finance</option>

                <option value="Sales">Sales</option>

            </select>

            <select class='form-field' name="position">

                <option value="">Position</option>

                <option value="Executive">Executive</option>

                <option value="Manager">Manager</option>

                <option value="General Manager">General Manager</option>

                <option value="Managing Director">Managing Director</option>

            </select><br>

            <span class='form-field'><b>Select Photo</b></span>
            <input class='form-field' id="place" type="file" name="picture" placeholder="Select Photo"><br>

            <br>



            <input class='form-field'
                style="border: 4px solid #07006A; background-color:  teal; color: white; width:20%; height:50px;"
                type="submit" value="Add Employee" />


        </form>
    </body>

</html>