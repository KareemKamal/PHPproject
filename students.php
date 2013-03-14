<?php
include('functions.php');
include('config.php');
$link = connectToDB();
$resulttrack = mysqli_query($link, "select name from track");
$resultname = mysqli_query($link, "select name from student");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=${project.encoding}">
        <style>
            ul
            {
                list-style-type:none;
                margin:0;
                padding:0;
                overflow:hidden;
            }
            li
            {
                float:left;
            }
            #list a:link,a:visited
            {
                display:block;
                width:180px;
                font-weight:bold;
                color:#FFFFFF;
                background-color:red;
                text-align:center;
                padding:4px;
                text-decoration:none;
                text-transform:uppercase;
            }
            #list a:hover,a:active
            {
                background-color:rosybrown;
            }

        </style>

    </head>

    <body>
        <a href="admin.php"><img src="favicon.ico" height="50px" weidth="50px"></a> 
        <div id="list" align="center">
            <ul>
                <li><a href="adminaddinstructor.php" >Instructor</a></li>
                <li><a href="course.php">Course</a></li>
                <li><a href="track.php">Track</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="evaluation.php">Evaluation</a></li>
                <li><a href="intake.php">Intake</a></li>

            </ul><br>
            <div align="left">
                <table border="0">
                    <tr>
                        <td><label>Track:</label></td>
                        <td><select name="track">
                                <?php
                                while ($row = mysqli_fetch_assoc($resulttrack)) {
                                    echo "<option>{$row['name']}</option>";
                                }
                                ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Name:</label></td>
                        <td><select name="name">
                                <?php
                                while ($row = mysqli_fetch_assoc($resultname)) {
                                    echo "<option>{$row['name']}</option>";
                                }
                                ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value="Add/Edit"></td>
                        <td><input type="button" value="Delete"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><label>Track:</label></td>
                        <td><select name="track">
                                <?php
                                $resulttrack = mysqli_query($link, "select name from track");
                                while ($row = mysqli_fetch_assoc($resulttrack)) {
                                    echo "<option>{$row['name']}</option>";
                                }
                                ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Student:</label></td>
                        <td><select name="student">
                                <?php
                                $resultname = mysqli_query($link, "select name from student");
                                while ($row = mysqli_fetch_assoc($resultname)) {
                                    echo "<option>{$row['name']}</option>";
                                }
                                ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>New track:</label></td>
                        <td><select name="newtrack">
                                <?php
                                $resulttrack = mysqli_query($link, "select name from track where name <> 'open source'"); //ajax on this spot
                                while ($row = mysqli_fetch_assoc($resulttrack)) {
                                    echo "<option>{$row['name']}</option>";
                                }
                                ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Transfer"></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>

