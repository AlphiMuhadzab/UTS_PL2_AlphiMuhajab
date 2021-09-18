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
    <h4>Halaman Detail Siswa</h4>
        <table border = "1">
            <tr>
                <th>NISN</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ID KELAS</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>ID SPP</th>
                <th>AKSI</th>
            </tr>
            <?php
            $nisn= $_POST['nisn'];
        
            if($nisn == ""){
                    header("location:view_siswa.php?nisn=kosong");
                }else{
                ?>
                <tr>
                    <?php    
                    include 'koneksi.php';
                    $data = mysqli_query ($koneksi,"SELECT * FROM tb_mahasiswa where nisn='$nisn'");
                    while($d=mysqli_fetch_array($data)){
                    ?>
                    <td><?php echo $d['nisn']; ?></td>
                    <td><?php echo $d['nis']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['id_kelas']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td><?php echo $d['id_spp']; ?></td> 
                    <td><a href = "delete.php" onclick="confirmAction()">Delete</a></td>
                </tr>
            <?php
            }
        }
        ?>
                
        </table>
        <p><a href="view_siswa.php">Kembali</a></p>
        </center>
</body>
</html>