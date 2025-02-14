<div class="mt-4">
      <h2 class="mb-4">Tambah Data Carousel</h2>
<form action="" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul</label>
  <input type="text" class="form-control" name="jdl">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
  <textarea class="form-control"  rows="3" name="desk"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar</label>
  <input type="file" class="form-control" name="gbr">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-success" name="btn">Input Data</button>
</div>
</form>
<?php
  if(isset($_POST['btn'])){
    $path = '../gbrproject/';
    $jdl = $_POST['jdl'];
    $desk = $_POST['desk'];
    $gbr = $_FILES['gbr']['name'];
    move_uploaded_file($_FILES['gbr']['tmp_name'],$path.$gbr);
    $sqlInp = $conn->prepare('INSERT INTO carousel_images(image_url,title,description)VALUES(:img,:title,:desc)');
    $sqlInp->bindParam(':img',$gbr);
    $sqlInp->bindParam(':title',$jdl);
    $sqlInp->bindParam(':desc',$desk);
    if($sqlInp->execute()){
      echo "Data Berhasil Ditambahkan";
    }else {
      echo "Gagal menambahkan data: " . $sqlInp->errorInfo()[2];
  }
  }
?>
</div>

