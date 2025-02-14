<div class="mt-4">
      <h2 class="mb-4">Kelola Kategori</h2>
      <a href="?page=addkategori" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Kategori</a>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              $sqlOut = $conn->prepare("SELECT*FROM kategori");
              $sqlOut->execute();
              foreach ($sqlOut as $row) {
              ?>
              <tr>
              <td><?=$no++?></td>
             <td><?=$row['nama_kategori']?></td>
              <td>
                <a href="?page=edit&idkat=<?=$row['id_kategori']?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
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