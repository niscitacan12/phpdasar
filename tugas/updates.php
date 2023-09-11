<?php
include 'connect.php'; 
$id = $_GET['id']; 
$get_data = "select * from data_sekolah where id=$id"; 
$result_data = mysqli_query($conn, $get_data); 
$row = mysqli_fetch_assoc($result_data); 
$nama_sekolah = $row['nama_sekolah']; 
$alamat_sekolah = $row['alamat_sekolah'];
if (isset($_POST['submit'])) { 
    $nama = $_POST['nama']; 
    $Tempat_Tanggal_Lahir = $_POST['Tempat Tanggal Lahir'];
    $alamat_sekolah = $_POST['alamat']; 
    $kelas = $_POST['kelas'];
    $no_hape = $_POST['No'];
    $sql = "INSERT INTO data_siswa(nama, tempat tangal lahir, alamat, kelas, No) VALUES('$nama', '$tempat_tanggal_lahir', '$alamat_sekolah', '$kelas', '$no_hape')"; 
    $result = mysqli_query($conn, $sql); 
    if ($result) { 
        header('location:reads.php'); 
    } else { 
        die($conn->connect_error); 
    } 
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
<body class="min-vh-100 d-flex align-items-center"> 
    <div class='card w-50 m-auto p-3'> 
        <h3 class="text-center ">DATA SISWA</h3> 
        <form method="post"> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama</label> 
                <input type="text" class="form-control" id="nama" name="nama"> 
            </div> 
            <div class="mb-3">
                <label for="Tempat Tanggal Lahir" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" id="Tempat Tanggal Lahir" name="Tempat Tanggal Lahir">
            </div>
            <div class="mb-3"> 
                <label for="alamat" class="form-label">Alamat Sekolah</label> 
                <input type="text" class="form-control" id="alamat" name="alamat"> 
            </div> 
            <div class="mb-3">
            <label for="Kelas" class="form-label">Kelas</label> 
                <input type="text" class="form-control" id="kelas" name="kelas">
            </div>
            <div class="mb-3">
            <label for="No.Hape" class="form-label">No.Hape</label> 
                <input type="text" class="form-control" id="No.Hape" name="No.Hape">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
</html>