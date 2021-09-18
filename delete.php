
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
      // The function below will start the confirmation dialog
      function confirmAction() {
        let confirmAction = confirm("Are you sure to execute this action?");
        if (confirmAction) {
            alert("Action successfully executed");
        } else {
          alert("Action canceled");
        }
      }
</script>
<body>
    <center>
        <?php 
        if(isset($_GET['nisn'])){
            if($_GET['nisn'] == "kosong"){
                echo "<h4 style='color:red'>NISN Belum Di Input !</h4>";
            } else {
                $nisn= $_POST['nisn'];
                include 'Koneksi.php';
                $data = mysqli_query ($koneksi,"DELETE FROM tb_mahasiswa where nisn='$nisn'");
            }       
        }
        ?>
        <h4>Silahkan Masukan data Siswa</h4>
        <form method="post" action="delete.php">
		<table>
			<tr>
				<td>Input NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" placeholder="Input NISN Siswa"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button onclick="confirmAction()">Delete</button></td>
			</tr>
		</table>			
	</form>
        <p><a href="index_controller.php">Kembali</a></p>
    </center>
</body>
</html>