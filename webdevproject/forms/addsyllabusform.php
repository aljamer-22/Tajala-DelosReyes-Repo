<head><title>Add Syllabus</title></head>
<body>
    <h1>Add Syllabus</h1>
    <br><br>
    <form action="../form/addsyllabus.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code">
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject">
                        <?php
                            include_once("../dbConnection/mysqlconfig_connection.php");
                            $query = "SELECT * FROM tblsubjects";
                            $result = mysql_query($dbc, $query);
                            while ($res = mysql_fetch_array($result)) {
                                echo"<option value=\"".$res["subject_id"]."\">";
                                echo $res["subject_name"];
                                echo"</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Subject" value="Add"></td>
            </tr>
        </table>
    </form>
</body>