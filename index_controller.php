<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>

	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat, <?php echo $_SESSION['username']; ?>! anda berhasil login.</h4>
	<h4>Silahkan Klik Opsi dibawah ini untuk ditinjau.</h4>
	<table>
		<tr>
			<td><a href="view_siswa.php?id=<?php ?>">Siswa</a></td>
			<td>|</td>
			<td><a href="view_pembayaran.php?id=<?php ?>">Pembayaran</a></td>		
		</tr>
	</table>
	<br/>
	<br/>
	
	<a href="logout.php">LOGOUT</a>
	</center>	
</body>
</html>