<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$localhost = 'localhost:3306';
$username = "root";
$password = "";
$namaDB = "modul3_wad";
$koneksi = mysqli_connect($localhost, $username, $password, $namaDB);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$koneksi){
    echo "Koneksi gagal: silahkan coba lagi";
}
else{
    echo "Koneksi berhasil!";

}
// 
?>