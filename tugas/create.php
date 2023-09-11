<?php 
include 'connect.php'; 
session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login 
 
if (!isset($_SESSION['email'])) { 
    // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login 
    echo "<script>alert('Maaf, Anda belum login!');</script>"; 
    echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda 
    exit; 
} 
 
if (isset($_POST['submit'])) { 
    $nama = $_POST['nama']; 
    $ttl = $_POST['ttl']; 
    $alamat = $_POST['alamat']; 
    $kelas = $_POST['kelas']; 
    $hp = $_POST['hp']; 
    $sql = "INSERT INTO data_siswa(nama, ttl , alamat, kelas, hp) VALUES('$nama', '$ttl', '$alamat','$kelas', '$hp')"; 
    $result = mysqli_query($conn, $sql); 
    if ($result) { 
        header('location: reads.php'); 
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
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
        <h3 class="text-center ">Data Siswa</h3>  
        <form method="post" >  
            <div class="mb-3">  
                <label for="nama" class="form-label">Nama Siswa</label>  
                <input type="text" class="form-control" id="nama" name="nama"> 
            </div>  
            <div class="mb-3">  
                <label for="ttl" class="form-label">tempat tanggal lahir</label>  
                <input type="text" class="form-control" id="ttl" name="ttl">  
            </div>  
            <div class="mb-3">  
                <label for="alamat" class="form-label">alamat</label>  
                <input type="text" class="form-control" id="alamat" name="alamat">  
            </div>  
            <div class="mb-3">  
                <label for="kelas" class="form-label">Kelas</label>  
                <input type="number" class="form-control" id="kelas" name="kelas">  
            </div>  
            <div class="mb-3">  
                <label for="hp" class="form-label">no Hp</label>  
                <input type="number" class="form-control" id="hp" name="hp">  
            </div>  
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>  
        </form>  
    </div>  
</body>  
</html>