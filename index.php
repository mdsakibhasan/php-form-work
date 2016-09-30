<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registion</title>
</head>
<body>
	<h1>send to mail anyone from email</h1>
	<form action="information.php" method="POST">
		<table>
			<tr>
				<td><label for="from">From:</label></td>
				<td><input type="email" name="from" id="from"></td>
			</tr>
			<tr>
				<td><label for="to">To:</label></td>
				<td><input type="email" name="to" id="to"></td>
			</tr>
			<tr>
				<td><label for="subject">subject:</label></td>
				<td><input type="text" name="subject" id="subject"></td>
			</tr>
			<tr>
				<td><label for="message">message:</label></td>
				<td><textarea name="message" id="message"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SEND"></td>
			</tr>
		</table>
	</form>

	
</body>
