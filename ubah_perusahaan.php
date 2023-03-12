<?php include "header.php";
$ambil = $koneksi->query("SELECT * FROM penempatan_kerja WHERE id_penempatan ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Perusahaan</h1>
    </div>
    <!-- /.container-fluid -->
    <br><br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Perusahaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_perusahaan'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="5">
                    <?php echo $pecah['alamat_perusahaan'] ?>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelp" value="<?php echo $pecah['no_telp'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="notelp" class="col-sm-2 col-form-label">Jumlah Karyawan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jum_krywn" value="<?php echo $pecah['jumlah_karyawan'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
            </div>
        </div>
    </form>
    <?php include "footer.php" ?>
    <?php
    if (isset($_POST['ubah'])) {
        $koneksi->query("UPDATE penempatan_kerja SET nama_perusahaan='$_POST[nama]',alamat_perusahaan='$_POST[alamat]',
        no_telp='$_POST[notelp]',jumlah_karyawan='$_POST[jum_krywn]' WHERE id_penempatan='$_GET[id]'");
        echo "<script>alert('Data Berhasil Diubah');window.location='data_perusahaan.php'</script>";
    }
    ?>