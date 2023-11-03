<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Data</title>
</head>
<body>
    <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST["Submit"])){
            $code = $_POST["code"]; 
            $name = $_POST["name"];

            if(empty($code) || empty($name)) {
                if(empty($code)) {
                    echo "<font color='red'>Subject Code Field is Empty.</font><br/>";
                }
                if(empty($name)) {
                    echo "<font color='red'>Subject Name Field is Empty.</font><br/>";
                }
                echo "<br/><a href='javascript:self.history.back();'>Gp Back</a>";
            }
            else {
                $result = mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subject_name) VALUE('$code', '$name')");

                echo "<font color='green'>Data Added Succesfully.";
                echo "<br/><a href='../index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>