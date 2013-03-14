<?php

if(isset($_POST['stud_name'])) {
   $link = mysqli_connect(
		'localhost',
		'root', 
		'', 
		'php_project'
	);

	if (!$link) 
		{
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());	
		} 
   
                
     // @header("Location: 1.php");          wrong password
}else{
  
    
}
$subjects = array(
    "choose a subject" => "choose a subject  ",
    "network" => "Network",
    "OS" => "Operating System"
);
$instructors = array(
    "instructor" => "choose an instructor",
    "BigBoss" => "Ahmed Gnaidy",
    "supervisor" => "Nuha Amer"
);
?>

<html>
    <head>
        <title>Choose Evaluation </title>
    </head>
    <body>
        <table border="0">
            <tr>
                <td><label>Subject</label></td>
                <td><select name="subj">
<?php
foreach ($subjects as $subj => $value)
    echo"<option value='$subj'>$value</option>";
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
        </table>
        <br>
        <label>Evaluation deadline is :</label>
        <table border="0">
            <tr>
                <td><input type="submit" value="InstructorEvaluation"/><td>
                <td><input type="submit" value="CourseEvaluation"/><td/>
            </tr>
        </table>


    </body>


</html>
