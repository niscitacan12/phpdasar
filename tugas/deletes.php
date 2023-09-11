<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from data_siswa where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:reads.php');
    } else {
        die($conn->connect_error);
    }
}
?>