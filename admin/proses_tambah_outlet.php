<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tampil_outlet.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama, alamat_outlet) value ('".$nama."','".$alamat."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tampil_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>