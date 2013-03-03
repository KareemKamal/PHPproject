<?php
$trackname = array(
			"choose"=>"choose track name",
            "os" => "open source" ,
            "pd" => "professional developers",
			"ui"=>"User Interface"
			
          
        ); 



$courses = array(
			"choose"=>"choose course name",
            "network" => "Network" ,
            "os" => "Operating System",
			"php"=>"PHP"
          
        ); 
$instructors = array(
			"choose"=>"choose instructor name",
            "bigboss" => "Ahmed Gnaidy" ,
            "assistent1" => "Ahmed Fawzy"
        ); 

?>
<html>
	<head>
		<title>Evaluations:</title>
	</head>
	<body>
		<table border="0">
			<tr>
				<td><label>Track:</label></td>
				<td><select name="track">
					<?php
						foreach($trackname as $track=>$value)
						{
							echo"<option value='$track'>$value</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Course:</label></td>
				<td><select name="coursename">
					<?php
						foreach($courses as $coursename=>$value)
						{
							echo"<option value='$coursename'>$value</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Instructor:</label></td>
				<td><select name="instructorname">
					<?php
						foreach($instructors as $instructorname=>$value)
						{
							echo"<option value='$instructorname'>$value</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Due date</label></td>
				<td><input type="text" name="duedate"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Activate"></td>
			</tr>
		</table>
	</body>


</html>