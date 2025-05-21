<?php
session_start();
  include"../lib/koneksi.php";
  if (!isset($_SESSION['iduser'])) {
    include"login.php";
  }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="asset/style.css">
</head>
<body>
  <!-- Sidebar -->
  <?php
    include"modul/sidebar.php";
  ?>

  <!-- Main Content -->
  <div class="content">
    <?php
      include"modul/navbar.php";
    ?>
    <!-- Dashboard Heading -->
    <?php
    $page = $_GET['page'];
    switch ($page) {
      case 'caro':
        include"modul/carousel/data.php";
        break;
     case 'addcaro':
          include"modul/carousel/add.php";
          break;
    case 'kategori':
      include"modul/kategori/data.php";
      break;
    case 'addkategori':
        include"modul/kategori/add.php";
        break;
    case 'edit':
      include"modul/kategori/edit.php";
      break;
    case 'delete':
      include"modul/kategori/delete.php";
      break;
    case 'berita':
      include"modul/berita/data.php";
      break;
    case 'addberita':
        include"modul/berita/add.php";
        break;
    case 'keluar':
      include"logout.php";
      break;
    default:
      break;
    }
      // include"modul/content.php";
    ?>
  </div>

  <!-- Footer -->
  <footer class="footer">
    &copy; 2025 Admin Dashboard - All Rights Reserved
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php } ?>