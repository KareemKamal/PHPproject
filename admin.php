<?php
$intakenum = array(
    "choose" => "choose Intake number  ",
    "1" => "30",
    "2" => "31"
);
$track = array(
    "choose" => "choose track name  ",
    "os" => "Open source",
    "pd" => "Professional Developers",
    "mobApp" => " Mobile application",
    "unix" => "Unix",
    "UI" => "User Interface"
);

$course = array(
    "choose" => "choose a subject  ",
    "network" => "Network",
    "OS" => "Operating System"
);
$instructors = array(
    "choose" => "choose an instructor",
    "BigBoss" => "Ahmed Gnaidy",
    "supervisor" => "Nuha Amer"
);
?>
<!DOCTYPE html>
<html>
    <head>
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
            <div>
                <form action="" method="post" name="">
                    <table border="0">
                        <tr>
                            <td><label>Intake</label></td>
                            <td><select name="intake">
                                    <?php
                                    foreach ($intakenum as $intake => $value)
                                        echo"<option value='$intake'>$value</option>";
                                    ?>

                            </td>
                        </tr>
                        <tr>
                            <td><label>Track</label></td>
                            <td><select name="track">
                                    <?php
                                    foreach ($track as $track => $value)
                                        echo"<option value='$track'>$value</option>";
                                    ?>

                            </td>
                        </tr>
                        <tr>
                            <td><label>Course</label></td>
                            <td><select name="course">
                                    <?php
                                    foreach ($course as $course => $value)
                                        echo"<option value='$course'>$value</option>";
                                    ?>

                            </td>
                        </tr>
                        <tr>
                            <td><label>Instructor</label></td>
                            <td><select name="instructor">
                                    <?php
                                    foreach ($instructors as $instructor => $value)
                                        echo"<option value='$instructor'>$value</option>";
                                    ?>

                            </td>
                        </tr>
                        <tr>
                            <td><label>Due Date :</label></td>
                            <td><input type="text" name="due_date"><td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td><input type="submit" value="InstructorEvaluation"/><td>
                            <td><input type="submit" value="CourseEvaluation"/><td/>
                            <td><input type="submit" value="Deactivate"/></td>
                            <td><input type="submit" value="Delete"/></td>
                            <td><input type="submit" value="Edit"/></td>
                            <td><input type="submit" value="LateStudent"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>

