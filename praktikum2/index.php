<?php
include_once 'top.php';
?>

<form class="form-horizontal" method="POST" action="nilai_siswa.php">
<fieldset>


<legend>Form Nilai Siswa STT NF</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input name="nama" type="text" placeholder="Masukkan Nama Anda" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="button dropdown">Mata Kuliah</label>
  <div class="col-md-4">
        <select class="form-select" name="matkul" aria-label="Default select example">
        <option selected>Select</option>
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="WEB">Pemograman Web</option>
        <option value="BD">Basis Data</option>
    </div>
</div>
</select>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uts" value="" placeholder="Masukan Angka" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uas" value="" placeholder="Masukan Angka" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="classol-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input type="text" name="nilai" placeholder="Masukan Angka" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <div class="col-md-4">
    <button type="submit" name="proses" value="Simpan" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>

<?php
include_once 'bottom.php';
?>