<?php
    $id = $_GET['idkat'];
    $b = $conn->prepare("SELECT * FROM kategori WHERE id_kategori = '$id'");
    $b->execute();
    $result = $b->fetch(PDO::FETCH_ASSOC);
    echo $result['nama_kategori'];
?>