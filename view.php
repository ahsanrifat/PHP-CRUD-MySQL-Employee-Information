<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="oth_heading">View Employee Information</div>
        <div class="btn">
            <span class="oth_btn"><a id="link" href="insert.php">Insert Employee Data</a></span>
            <span class="oth_btn"><a id="link" href="edit.php">Edit Employee Data</a></span>
        </div>
        <?php
            include 'db.php';
            $sql = "SELECT * FROM employee";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joining Date</th>
                    <th>Depertment</th>
                    <th>Position</th>
                    <th>Manager</th>
                    <th>Salary</th>
                    <th>Mobile</th>
                    <th>Image</th>
                </tr>";
                // output data of each row
                $i=0;
                while($row = $result->fetch_assoc()) {
                    $i=$i+1;
                  echo "<tr>
                            <td>".$i."</td>
                            <td>".$row["name"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["joining_date"]."</td>
                            <td>".$row["depertment"]."</td>
                            <td>".$row["position"]."</td>
                            <td>".$row["manager"]."</td>
                            <td>".$row["salary"]."</td>
                            <td>".$row["mobile"]."</td>
                            <td><img id='tbl-img' src=".$row["Image"]."></td>
                        </tr>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              $mysqli->close();
        
        ?>

    </body>

</html>