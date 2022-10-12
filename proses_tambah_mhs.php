<?php
include("koneksi.php");
if($_POST){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $alamat=$_POST['alamat'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

    } elseif(empty($nim)){
        echo "<script>alert('nim tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
        } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
        } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into mahasiswa (nama, nim, alamat, password) value ('".$nama."','".$nim."','".$alamat."','".$password."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_mahasiswa.php';</script>";
        }
    }
}
?>
