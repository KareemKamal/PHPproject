
<?php
$intakenum = array(
			"choose"=>"choose intake number",
            "start" => "30" ,
            "other" => "31"
          
        ); 

?>
<html>
	<head>
		<title>Set intake </title>
	</head>
	<body>
		<form action="" meyhod="post">
			<table border="0">
				<tr>
					<td><label>Intake  no:</label></td>
					<td><select name="intakeno">
						<?php
							foreach($intakenum as $intakeno=>$value)
							{
								echo"<option value='$intakeno'>$value</option>";
							
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
	</body>


</html>