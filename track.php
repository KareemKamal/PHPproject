


<?php
include('functions.php');
include('config.php');
$link = connectToDB();
$result = mysqli_query($link, "select name from track");
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
                Track <br>
                <form method="post" action="">
                    Name <select name="name">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option>{$row['name']}</option>";
                        }
                        ?>
                    </select><br>
                    <input type="submit" value="add/edit"> <input type="button" name="delete" value="delete">
                </form>
            </div>
        </div>
    </body>
</html>

