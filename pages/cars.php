<?php
<?php
include('../config/db.php');
include('../includes/head.php');
include('../includes/header.php');
?>
<main>
    <h1>Car Listings</h1>
    <div class="car-list">
        <?php
        $result = $conn->query("SELECT * FROM cars");
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="car-item">';
                echo '<img src="/myprojects/carmafia/assets/images/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '" style="width:200px;">';
                echo '<h2>' . htmlspecialchars($row['brand']) . ' ' . htmlspecialchars($row['name']) . '</h2>';
                echo '<p>Price: ₹' . number_format($row['price']) . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No cars found.</p>";
        }
        ?>
    </div>
</main>
<?php include('../includes/footer.php'); ?>