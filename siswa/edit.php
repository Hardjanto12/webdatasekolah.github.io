<!-- select data siswa from database -->
<?php
  include 'db_siswa.php';
    $db = new dbsiswa();
    $db->getdata_edit($_GET['id']);
    
?>

<!-- form edit siswa -->
<form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
    <?php foreach($db->getdata_edit($_GET['id']) as $x): ?>
    <input type="hidden" name="id" value="<?php echo $x['id_siswa']; ?>">
    <input type="hidden" name="gambarlama" value="<?php echo $x['foto']; ?>">

    <div class="form-group">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" value="<?php echo $x['nis']; ?>">
    </div>

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $x['nama_lengkap']; ?>">
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $x['tgl_lahir']; ?>">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="L" <?php if($x['jenis_kelamin'] == 'L'){echo "selected";} ?>>Laki-Laki</option>
            <option value="P" <?php if($x['jenis_kelamin'] == 'P'){echo "selected";} ?>>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?php echo $x['alamat']; ?></textarea>
    </div>

    <div class="form-group">
        <label>Nama Ayah</label>
        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $x['nama_ayah']; ?>">
    </div>

    <div class="form-group">
        <label>Nama Ibu</label>
        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $x['nama_ibu']; ?>">
    </div>

    <div class="form-group">
        <label>No Telp</label>
        <input type="text" name="notelp" class="form-control" value="<?php echo $x['notelp']; ?>">
    </div>
    <!-- form to save picture into img folder -->
    <div class="form-group">
        <label>Foto</label>
        <img src="../img/<?php echo $x['foto']; ?>" width="100px" height="100px" class="rounded-circle">
        <input type="file" name="foto" class="form-control">
    </div>

    <div class="form-group">
        <label>Tahun Lulus</label>
        <input type="text" name="tahun_lulus" class="form-control" value="<?php echo $x['tahun_lulus']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="Update Data">
    </div>
    <?php endforeach; ?>
</form>
<!-- end form edit siswa -->