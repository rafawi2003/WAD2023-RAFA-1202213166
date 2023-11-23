<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$localhost = 'localhost:3306';
$username = "root";
$password = "";
$namaDB = "modul4_wad";
$koneksi = mysqli_connect($localhost, $username, $password, $namaDB);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$koneksi){
    echo "Koneksi gagal: silahkan coba lagi";
}
// 
 
?>