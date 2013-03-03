<html>
	<head>
		<title>Student log in </title>
	</head>
	<body>
			<table border="0">
			<tr>
				<td><label>Name</label></td>
			<td><input type="text" name="stud_name" /></td><br>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="text" name="stud_password"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="check"  value="yes"/>Forget your password</td>
			</tr>
			<tr>
				<td><input type="submit" value="login"/></td>
				<form method="post" action="studentchangepw.php">
					<td><input type="submit" value="ChangePassword">
				</form>
			</tr>
		</table>
	</body>
</html>