<?php
include 'connect.php';

// Mengecek apakah parameter 'id' ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // mengambil data di siswa id
    $get_data = "SELECT * FROM siswa WHERE id_siswa=$id";
    $result_data = mysqli_query($conn, $get_data);
    $row = mysqli_fetch_assoc($result_data);
    $nama_siswa = $row['nama_siswa'];
    $nisn = $row['nisn'];
    $gender = $row['gender'];

    if (isset($_POST['submit'])) {
        $input_nama_siswa = $_POST['nama'];
        $input_nisn = $_POST['nisn'];
        $input_gender = $_POST['gender'];
        $input_id_kelas = $_POST['id_kelas'];
        $sql = "UPDATE siswa SET nama_siswa='$input_nama_siswa', gender='$input_gender', nisn='$input_nisn', id_kelas='$input_id_kelas' WHERE id_siswa=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: siswa.php');
            exit;
        } else {
            die("Error in the query: " . mysqli_error($conn));
        }
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
    <div class="card w-50 m-auto p-3"> 
        <h3 class="text-center">Update</h3> 
        <form method="post" class="row"> 
            <div class="mb-3 col-6"> 
                <label for="nama" class="form-label">Nama Siswa</label> 
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_siswa ?>"> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="nisn" class="form-label">NISN</label> 
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn ?>"> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="gender" class="form-label">Gender</label> 
                <select name="gender" class="form-select"> 
                    <option value ="<?php echo $gender ?>" selected><?php echo $gender ?></option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">perempuan</option>
                </select> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="kelas" class="form-label">Kelas</label> 
                <select name="id_kelas" class="form-select">
                    <option selected>pilih kelas</option>
                    <?php
                    $sql = "select * from kelas";
                    $result = mysqli_query($conn, $sql);
                    foreach ($result as $row);{
                    ?> 
                    <option value="<?= $row['id'] ?>"><?= $row['tingkat_kelas'].' '.$row['jurusan_kelas']; ?>
                    </option>
                    <?php
                    } 
                     ?>
                </select>
            </div> 
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
 
</html>
