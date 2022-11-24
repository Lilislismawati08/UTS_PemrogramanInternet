<!DOCTYPE html>
<html>
    <head>
        <title>Data Sekolah</title>
    </head>
    <body>
        <h2>Data Sekolah</h2>
        <a href="add.php" style="padding:0.4% 0.8%;background-color:chartreuse;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
        <table border="1" cellspacing="0" widht="50%">
            <tr style="text-align:center;font-weight:bold;background-color:aqua;">
                <td>No</td>
                <td>NPSN</td>
                <td>Status</td>
                <td>Bentuk Pendidikan</td>
                <td>Nama Sekolah</td>
                <td>SK Pendirian</td>
                <td>Tanggal Pendirian</td>
                <td>SK Izin Operasional</td>
                <td>Tanggal Izin Operasional</td>
                <td>Alamat</td>
                <td>RT</td>
                <td>RW</td>
                <td>Dusun</td>
                <td>Desa</td>
                <td>Kecamatan</td>
                <td>Kabupaten</td>
                <td>Provinsi</td>
                <td>Kode Pos</td>
                <td>Aksi</td>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $select = mysqli_query($conn, "SELECT * FROM tb_sekolah");
            if(mysqli_num_rows($select) > 0){
            while($hasil = mysqli_fetch_array($select)){
            ?>
            <tr style="text-align:center;">
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['npsn'] ?></td>
                <td><?php echo $hasil['status'] ?></td>
                <td><?php echo $hasil['bentuk_pendidikan'] ?></td>
                <td><?php echo $hasil['nama_sekolah'] ?></td>
                <td><?php echo $hasil['sk_pendirian'] ?></td>
                <td><?php echo $hasil['tgl_pendirian'] ?></td>
                <td><?php echo $hasil['sk_izin_operasional'] ?></td>
                <td><?php echo $hasil['tgl_izin_operasional'] ?></td>
                <td><?php echo $hasil['alamat'] ?></td>
                <td><?php echo $hasil['rt'] ?></td>
                <td><?php echo $hasil['rw'] ?></td>
                <td><?php echo $hasil['dusun'] ?></td>
                <td><?php echo $hasil['desa'] ?></td>
                <td><?php echo $hasil['kecamatan'] ?></td>
                <td><?php echo $hasil['kabupaten'] ?></td>
                <td><?php echo $hasil['provinsi'] ?></td>
                <td><?php echo $hasil['kode_pos'] ?></td>
                <td>
                    <a href="edit.php?npsn=<?php echo  $hasil['npsn'] ?>"  style=text-decoration:none;>Edit</a> 
                    <a href="hapus.php?npsn=<?php echo  $hasil['npsn'] ?>"  style=text-decoration:none;>Hapus</a>

                </td>
            </tr>
            <?php }}else {?>
                <tr>
                    <td colspan="18" align="center">Data Kosong</td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>