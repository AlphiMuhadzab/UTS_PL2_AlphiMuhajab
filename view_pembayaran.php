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
        <?php 
        if(isset($_GET['nisn'])){
            if($_GET['nisn'] == "kosong"){
                echo "<h4 style='color:red'>NISN Belum Di Input !</h4>";
            }
        }
        ?>
        <h4>Silahkan Masukan data NISN Siswa untuk melihat pembayaran</h4>
        <form method="post" action="view_data_pembayaran.php">
		<table>
			<tr>
				<td>Input NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" placeholder="Input NISN Siswa"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>			
	</form>
        <p><a href="index_controller.php">Kembali</a></p>
    </center>
</body>
</html>