<?php
include "connection.php";

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = isset($_POST['jk']) ? $_POST['jk'] : null;
    $tgl = $_POST['tgl_lhr'];
    $email = $_POST['email'];

    // Jika data sudah diisi dan dikirim dari klien, simpan ke database
    $sql = "INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email)
    VALUES ('$npm', '$nama', '$alamat', '$jk', '$tgl', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect setelah sukses
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
