<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style type="text/css">
		body
{
background-color: #C0C0C0;
}
.login
{
background-color: white;
width: 400px;
padding: 20px;
margin: auto;
margin-top: 100px;
border: 2px solid black;
font-size: 18px;
}
h3
{
background-color: #0000FF;
text-align: center;
color: white;
width: 400px;
padding: 10px;
border-radius: 7px;
}
input
{
width: 100%;
padding: 12px 10px;
box-sizing: border-box;
font-size: 18px;
}
input[type=submit]
{
background-color: #6F00FF;
border-radius:18px;
color: white;
}
</style>
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<center>					
		<table>
			<tr>
				<td colspan="3"><form class=”login”>
					<h3>SILAHKAN LOGIN DULU</h3></form></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="LOGIN"></td>
				<td></td>
				<td></td>
			</tr>
		</table></center>			
	</form>
</body>
</html>