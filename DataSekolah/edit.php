<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tb_sekolah where npsn = '".$_GET['npsn']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Edit Data Sekolah</title>
    </head>
    <body>
        <h2>Edit Data</h2>
        <a href="index.php" style="padding:0.4% 0.8%;background-color:chartreuse;border-radius:2px;text-decoration:none;">Data Sekolah</a><br><br>
        <form action="" method="POST">
    <table>
        <tr>
            <td>NPSN</td>
            <td><input type="text" name="npsn"value="<?php echo $result['npsn']?>" required></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><select name="status" value="<?php echo $result['status']?>">
            <option  value="<?php echo $result['status']?>"><?php echo $result['status']?></option>
                <option value="Pilih status">Pilih Status</option>
                <option value="negeri">negeri</option>
                <option value="swasta">swasta</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Bentuk Pendikan</td>
            <td><select name="bentuk_pendidikan">
            <option  value="<?php echo $result['bentuk_pendidikan']?>"><?php echo $result['bentuk_pendidikan']?></option>
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
            <td><input type="text" name="nama_sekolah" value="<?php echo $result['nama_sekolah']?>" required></td>
        </tr>
        <tr>
            <td>SK Pendirian</td>
            <td><input type="text" name="sk_pendirian" value="<?php echo $result['sk_pendirian']?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Pendirian</td>
            <td><input type="date" name="tgl_pendirian" value="<?php echo $result['tgl_pendirian']?>" required></td>
        </tr>
        <tr>
            <td>SK Izin Operasional</td>
            <td><input type="text" name="sk_izin_operasional" value="<?php echo $result['sk_izin_operasional']?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Izin Operasional</td>
            <td><input type="date" name="tgl_izin_operasional" value="<?php echo $result['tgl_izin_operasional']?>"required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $result['alamat']?>" required></td>
        </tr>
        <tr>
            <td>RT</td>
            <td><input type="text" name="rt" value="<?php echo $result['rt']?>" required></td>
        </tr>
        <tr>
            <td>RW</td>
            <td><input type="text" name="rw" value="<?php echo $result['rw']?>" required></td>
        </tr>
        <tr>
            <td>Dusun</td>
            <td><input type="text" name="dusun" value="<?php echo $result['dusun']?>" required></td>
        </tr>
        <tr>
            <td>Desa</td>
            <td><input type="text" name="desa" value="<?php echo $result['desa']?>" required></td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td><input type="text" name="kecamatan" value="<?php echo $result['kecamatan']?>" required></td>
        </tr>
        <tr>
            <td>Kabupaten</td>
            <td><input type="text" name="kabupaten" value="<?php echo $result['kabupaten']?>" required></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td><input type="text" name="provinsi" value="<?php echo $result['provinsi']?>" required></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="kode_pos" value="<?php echo $result['kode_pos']?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Simpan"></td>
        </tr>
    </table>
    </form>
    <?php
    $conn = mysqli_connect('localhost','root','','sekolah_db');
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE tb_sekolah SET npsn = '".$_POST['npsn']."',
        status = '".$_POST['status']."',bentuk_pendidikan = '".$_POST['bentuk_pendidikan']."',nama_sekolah = '".$_POST['nama_sekolah']."',sk_pendirian = '".$_POST['sk_pendirian']."',tgl_pendirian = '".$_POST['tgl_pendirian']."',sk_izin_operasional = '".$_POST['sk_izin_operasional']."',tgl_izin_operasional = '".$_POST['tgl_izin_operasional']."',alamat = '".$_POST['alamat']."',rt = '".$_POST['rt']."',rw = '".$_POST['rw']."',dusun = '".$_POST['dusun']."',desa = '".$_POST['desa']."',kecamatan = '".$_POST['kecamatan']."',kabupaten = '".$_POST['kabupaten']."',provinsi = '".$_POST['provinsi']."',kode_pos = '".$_POST['kode_pos']."' WHERE npsn = '".$_GET['npsn']."'");
        if($update){
            echo 'berhasil edit'; 
        }else{
            echo 'gagal edit'; 
        }
   
     }
    ?>
    </body>
</html>