
<?php
$intakenum = array(
    "choose" => "choose intake number",
    "start" => "30",
    "other" => "31"
);
?>

<?php
include('functions.php');
include('config.php');
$link = connectToDB();
$result = mysqli_query($link, "select name from intake");
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
        <a href="admin.php"><img src="logo.jpg" height="80px" weidth="80px"></a> 
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

                <form action="" meyhod="post">
                    <table border="0">
                        <tr>
                            <td><label>Intake :</label></td>
                            <td><select name="intakeno">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option>{$row['name']}</option>";
                                    }
                                    ?>       

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="SetAsCurrent"></td>
                            <td><input type="submit" value="Delete"></td>
                        </tr>
                    </table>	
                </form>
            </div>
        </div>
    </body>
</html>

