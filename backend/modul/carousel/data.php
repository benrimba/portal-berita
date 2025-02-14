<div class="mt-4">
      <h2 class="mb-4">Kelola Carousel</h2>
      <a href="?page=addcaro" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Carousel</a>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              $sqlOut = $conn->prepare("SELECT*FROM carousel_images");
              $sqlOut->execute();
              foreach ($sqlOut as $row) {
              ?>
              <tr>
              <td><?=$no++?></td>
              <td><img src="../gbrproject/<?=$row['image_url']?>" alt="Image" class="img-thumbnail" style="width: 100px;"></td>
              <td><?=$row['title']?></td>
              <td><?=$row['description']?></td>
              <td>
                <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
              </td>
            </tr>
              <?php
              }
          ?>


          </tbody>
        </table>
      </div>
    </div>