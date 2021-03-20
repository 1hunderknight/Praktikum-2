<?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai'];
$nilai_uas = $_POST['nilai'];
$nilai_tugas = $_POST['nilai'];

if (!empty($proses)) {
	echo 'proses : '.$proses;
	echo '<br/>Nama : '.$nama_siswa;
	echo '<br/>Mata Kuliah : '.$mata_kuliah;
	echo '<br/>Nilai UTS : '.$nilai_uts;
	echo '<br/>Nilai UAS : '.$nilai_uas;
	echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;

	$semua_nilai =($nilai_uts + $nilai_uas + $nilai_tugas)/3;
    echo '<br/> <b> <h1>Grade Anda : </h1></b>' .$semua_nilai;
    if($semua_nilai >= 85){
        echo "</br><h1>Anda Mendapatkan Grade A</h1>";
    }elseif($semua_nilai >= 70){
        echo "</br><h1>Anda Mendapatkan Grade B</h1>";
    }elseif($semua_nilai >= 56){
        echo "</br><h1>Anda Mendapatkan Grade C</h1>";
    }elseif($semua_nilai >= 36){
        echo "</br><h1>Anda Mendapatkan Grade D</h1>";
    }elseif($semua_nilai >= 0){
        echo "</br><h1Anda Mendapatkan Grade E</h1>";
    }else{
        echo "</br><h1>Anda Mendapatkan Grade I</h1>";
    }
}


?>

