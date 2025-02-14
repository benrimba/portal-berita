<?php
$sql = "SELECT image_url, title, description FROM carousel_images";
$stmt = $conn->prepare($sql);
$stmt->execute();

$carouselItems = '';
$isFirstItem = true;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $activeClass = $isFirstItem ? 'active' : '';
    $carouselItems .= '
    <div class="carousel-item ' . $activeClass . '">
        <img src="' . htmlspecialchars($row['image_url']) . '" class="d-block w-100" alt="Slider Image">
        <div class="carousel-caption d-none d-md-block">
            <h5>' . htmlspecialchars($row['title']) . '</h5>
            <p>' . htmlspecialchars($row['description']) . '</p>
        </div>
    </div>';
    $isFirstItem = false;
}
$conn = null;
?>
<div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php echo $carouselItems; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>