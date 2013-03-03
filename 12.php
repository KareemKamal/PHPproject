<?php
$trackname = array(
			"choose"=>"choose track name",
            "os" => "open source" ,
            "pd" => "professional developers",
			"ui"=>"User Interface"
			
          
        ); 
$students=array(
			"choose"=>"choose student name",
			"id1"=>"Ahmed Ali",
			"id2"=>"karim kmal",
			"id3"=>"Omnia Abou El Maaty"

);	
?>
<html>
	<head>
		<title>Students:</title>
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
				<td><label>Name:</label></td>
				<td><select name="name">
					<?php
						foreach($students as $name=>$value)
						{
							echo"<option value='$names'>$value</option>";
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
						foreach($trackname as $track=>$value)
						{
							echo"<option value='$track'>$value</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Student:</label></td>
				<td><select name="student">
					<?php
						foreach($students as $student=>$value)
						{
							echo"<option value='$student'>$value</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
			<td><label>New track:</label></td>
				<td><select name="newtrack">
					<?php
						foreach($trackname as $newtrack=>$value)
						{
							echo"<option value='$newtrack'>$value</option>";
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
	</body>


</html>