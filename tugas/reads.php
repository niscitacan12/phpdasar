<?php 
include 'connect.php'; // Add a semicolon here
session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login 
 
if (!isset($_SESSION['email'])) { 
    // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login 
    echo "<script>alert('Maaf, Anda belum login!');</script>"; 
    echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda 
    exit; }
     ?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"   
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  
</head>  
<body class="min-vh-100 d-flex align-items-center">  
    <div class= "card w-50 m-auto p-3">  
    <a class="btn btn-warning w-25 flex-end" href="create.php">create</a> 
        <h3 class="text-center">Read</h3>  
        <table class="table table-striped">  
  <thead>  
    <tr>  
      <th >Nama Siswa</th>  
      <th >Tanggak Lahir</th>  
      <th >Alamat</th>  
      <th >Kelas</th>  
      <th >No HP</th>  
      <th class= "text-center">Aksi</th>  
    </tr>  
  </thead>  
  <tbody class="table-group-divider">  
    <?php   
    $sql = "select * from data_siswa";  
    $result = mysqli_query($conn, $sql);  
    if ($result) {  
        while($data =mysqli_fetch_assoc($result)) {  
            $id = $data['id'];  
            $nama = $data['nama'];  
            $ttl = $data['ttl'];  
            $alamat = $data['alamat'];  
            $kelas = $data['kelas'];  
            $hp = $data['hp'];  
            echo '  
            <tr>  
            <td>'.$nama.'</td>  
            <td>'.$ttl.'</td>  
            <td>'.$alamat.'</td>  
            <td>'.$kelas.'</td>  
            <td>'.$hp.'</td>  
            <td class= "text-center">  
                <a href="updates.php?id='.$id.'"class="btn btn-sm btn-primary"> Update </a>  
                <button onClick="hapus('.$id.')"class="btn btn-sm btn-danger">Delete</button>  
            </td>  
            </tr>  
            ';  
        }  
        }  
    ?>  
  </tbody>  
</table>  
<a class="btn btn-danger w-25 flex-end" href="logout.php">Log Out</a> 
    </div>  
    <script>  
        function hapus(id) {  
            var yes = confirm('Yakin di hapus?');  
            if (yes == true) {  
                window.location.href= "deletes.php?id=" + id;  
            }  
        }  
    </script>  
</body>  
</html>