<?php
include('functions.php');
include('config.php');
$link = connectToDB();
$result = mysqli_query($link, "select name from instructor where deleted <> 1");
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-1.8.0.js"></script>
        <script src="adminaddinstructor.js"></script>

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
            .left  {float: left ; margin: 0 30px 0 0}
            .hidden {display: none;}
            .highlight {background-color: lightblue}

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
                <h3>Edit an Instructor:</h3><br>
                <form method="get" action="editinstructor.php">
                    <div id="old">
                        Name <select name="name">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option>{$row['name']}</option>";
                            }
                            ?>
                        </select><br>
                        <input type="button" value="edit"> <input type="submit" name="delete" value="delete"><br><br><br><br>
                    </div>
                    <div id="new" class="left hidden">
                        New Name<input type="text" name="newname">
                        <br>
                        <input type="submit" value="done" ><br>
                    </div><br><br><br>



                    <hr><br><br><br><br>
                    <h3>Add New Instructor:</h3><br>
                    Name <input type="text" name="Name"><br>
                    
                    <input type="submit" value="add"><br>
                </form>
            </div>
        </div>
    </body>
</html>

