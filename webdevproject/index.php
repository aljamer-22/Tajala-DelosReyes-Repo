<?php
    include_once('./webdevproject/dbConnection/mysqlconfig_connection.php');
    include_once('./webdevproject/functions/fetch.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simplel CRUD</title>
</head>

<body>
    <h1>My Subjects</h1>
    <a href="#">Add Subject</a><br /><br />
    <table style="width: 100%; border: 1;">
        <tr style="background-color: #cccccc;">
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>
        <?php
            while($res =mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['subject_id']."</td>";
                echo "<td>".$res['subject_code']."</td>";
                echo "<td>".$res['subject_name']."</td>";
                echo "<td><a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                      <a href=\"functions/delete.php?id=$res[subject_id]\" 
                      Onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
        ?>
    </table>
</body>

</html>