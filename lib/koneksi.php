<?php
$host = 'localhost';
$db = 'dbportal_berita';
$user = 'root';
$pass = 'rpl12345';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode untuk menangani exception
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}

?>
