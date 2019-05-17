<?php
    try {

        include 'koneksi.php';

        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $asal = $_POST['asal'];
        $universitas = $_POST['univ'];

        $sql_insert = "INSERT INTO mahasiswa (nama, nim, asal, universitas) 
                                VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $nama);
        $stmt->bindValue(2, $nim);
        $stmt->bindValue(3, $asal);
        $stmt->bindValue(4, $universitas);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Failed: " . $e;
    }
?>