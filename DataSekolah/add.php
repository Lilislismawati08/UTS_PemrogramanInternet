<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Tambah Data</title>
    </head>
    <body>
        <h2>Tambah Data</h2>
        <a href="index.php" style="padding:0.4% 0.8%;background-color:chartreuse;border-radius:2px;text-decoration:none;">Data Sekolah</a><br><br>
        <form action="" method="POST">
    <table>
        <tr>
            <td>NPSN</td>
            <td><input type="text" name="npsn" placeholder="NPSN" required></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><select name="status">
                <option value="Pilih status">Pilih Status</option>
                <option value="negeri">negeri</option>
                <option value="swasta">swasta</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Bentuk Pendikan</td>
            <td><select name="bentuk_pendidikan">
                <option value="Pilih Bentuk Pendidikan">Pilih Bentuk Pendidikan</option>
                <option value="tk">tk</option>
                <option value="sd">sd</option>
                <option value="smp">smp</option>
                <option value="sma">sma</option>
                <option value="smk">smk</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td><input type="text" name="nama_sekolah" placeholder="Nama Sekolah" required></td>
        </tr>
        <tr>
            <td>SK Pendirian</td>
            <td><input type="text" name="sk_pendirian" placeholder="SK Pendirian" required></td>
        </tr>
        <tr>
            <td>Tanggal Pendirian</td>
            <td><input type="date" name="tgl_pendirian" placeholder="Tanggal Pendirian" required></td>
        </tr>
        <tr>
            <td>SK Izin Operasional</td>
            <td><input type="text" name="sk_izin_operasional" placeholder="SK Izin Operasional" required></td>
        </tr>
        <tr>
            <td>Tanggal Izin Operasional</td>
            <td><input type="date" name="tgl_izin_operasional" placeholder="Tanggal Izin Operasional " required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Alamat" required></td>
        </tr>
        <tr>
            <td>RT</td>
            <td><input type="text" name="rt" placeholder="RT" required></td>
        </tr>
        <tr>
            <td>RW</td>
            <td><input type="text" name="rw" placeholder="RW" required></td>
        </tr>
        <tr>
            <td>Dusun</td>
            <td><input type="text" name="dusun" placeholder="Dusun" required></td>
        </tr>
        <tr>
            <td>Desa</td>
            <td><input type="text" name="desa" placeholder="Desa" required></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td><input type="text" name="kecamatan" placeholder="Kecamatan" required></td>
        </tr>
        <tr>
            <td>Kabupaten</td>
            <td><input type="text" name="kabupaten" placeholder="Kabupaten" required></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td><input type="text" name="provinsi" placeholder="Provinsi" required></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="kode_pos" placeholder="Kode Pos" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
    </form>
    <?php
    $conn = mysqli_connect('localhost','root','','sekolah_db');
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO tb_sekolah VALUES 
                            ('".$_POST['npsn']."',
                            '".$_POST['status']."',
                            '".$_POST['bentuk_pendidikan']."',
                            '".$_POST['nama_sekolah']."',
                            '".$_POST['sk_pendirian']."',
                            '".$_POST['tgl_pendirian']."',
                            '".$_POST['sk_izin_operasional']."',
                            '".$_POST['tgl_izin_operasional']."',
                            '".$_POST['alamat']."',
                            '".$_POST['rt']."',
                            '".$_POST['rw']."',
                            '".$_POST['dusun']."',
                            '".$_POST['desa']."',
                            '".$_POST['kecamatan']."',
                            '".$_POST['kabupaten']."',
                            '".$_POST['provinsi']."',
                            '".$_POST['kode_pos']."')");
        if($insert){
            echo 'berhasil disimpan';
        }else{
            echo 'gagal disimpan';
        }
     }
    ?>
    </body>
</html>