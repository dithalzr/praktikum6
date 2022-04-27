<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<form method="POST" action="loginAct.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">NPM</td>
				<td><input type="number" name="npm"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jnsklm" value="Laki-laki">Laki-laki
					<input type="radio" name="jnsklm" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Submit">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>