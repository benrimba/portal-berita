<?php
    $id = $_GET['idkat'];
    $b = $conn->prepare("DELETE FROM kategori WHERE id_kategori = '$id'");
   if($b->execute()){
    header('location:?page=kategori');
   }
?>