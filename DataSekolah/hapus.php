<?php
include 'koneksi.php';
if(isset($_GET['npsn'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_sekolah WHERE npsn = '".$_GET['npsn']."' ");
    header('location:index.php');
}
?>