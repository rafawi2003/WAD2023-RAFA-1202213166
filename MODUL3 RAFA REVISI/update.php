<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($koneksi, $id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil){
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $query_update = "UPDATE showroom_mobil SET
                    nama_mobil = '$nama_mobil',
                    brand_mobil = '$brand_mobil',
                    warna_mobil = '$warna_mobil',
                    tipe_mobil = '$tipe_mobil',
                    harga_mobil = '$harga_mobil'
                    where id = '$id'";
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $update = mysqli_query($koneksi, $query_update);
        // Eksekusi perintah SQL
         // a. Ambil data nama mobil
        $nama_mobil = $_POST['nama_mobil'];
        // b. Ambil data brand mobil
        $brand_mobil = $_POST['brand_mobil'];
        // c. Ambil data warna mobil
        $warna_mobil = $_POST['warna_mobil'];
        // d. Ambil data tipe mobil
        $tipe_mobil = $_POST['tipe_mobil'];
        // e. Ambil data harga mobil
        $harga_mobil = $_POST['harga_mobil'];

        // Buatkan kondisi jika eksekusi query berhasil
        if ($update) {
            header ("location: list_mobil.php");
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else {
            echo "<a href ='list_mobil.php'>Data tidak berhasil diupdate</a>:" . mysqli_error($koneksi);
        }
    }
    ;
    // Panggil fungsi update dengan data yang sesuai
    update($koneksi, $id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil);
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
?>