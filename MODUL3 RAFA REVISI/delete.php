<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include ("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET["id"])) {
    $id = $_GET["id"];    
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $delete = "DELETE FROM showroom_mobil WHERE id = $id";

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if (mysqli_query($connect, $delete)) {
        if (mysqli_affected_rows($connect) == 1){
        echo "<a href ='list_mobil.php'> Data berhasil dihapus</a>:";} 
        else {
        echo "<a href ='list_mobil.php'> Data dengan ID $id tidak ditemukan</a>";
    }
    }
    }
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);
?>