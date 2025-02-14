<div class="mt-4">
      <h2 class="mb-4">Tambah Data Kategori</h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul Kategori</label>
  <input type="text" class="form-control" name="jdl">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-success" name="btn">Input Data</button>
</>
</form>
<?php
  if(isset($_POST['btn'])){
    $jdl = $_POST['jdl'];
    $sqlInp = $conn->prepare('INSERT INTO kategori(nama_kategori)VALUES(:title)');
    $sqlInp->bindParam(':title',$jdl);
    if($sqlInp->execute()){
      header('location:?page=kategori');
    }else {
      echo "Gagal menambahkan data: " . $sqlInp->errorInfo()[2];
  }
  }
?>
</div>

