<?php
<?php
include('../config/db.php');
include('../includes/head.php');
include('../includes/header.php');

$car_id = isset($_GET['car_id']) ? intval($_GET['car_id']) : 0;
$result = $conn->query("SELECT * FROM cars WHERE id = $car_id");
$car = $result->fetch_assoc();
?>
<main>
    <?php if ($car): ?>
        <h1><?= htmlspecialchars($car['brand'] . ' ' . $car['name']) ?></h1>
        <img src="/myprojects/carmafia/assets/images/<?= htmlspecialchars($car['image']) ?>" style="width:300px;">
        <p>Price: ₹<?= number_format($car['price']) ?></p>
        <!-- Add more details as needed -->
    <?php else: ?>
        <p>Car not found.</p>
    <?php endif; ?>
</main>
<?php include('../includes/footer.php'); ?>