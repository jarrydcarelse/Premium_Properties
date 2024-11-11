<?php
include "includes/db.php" ;
include "includes/auth.php" ;
include "includes/navbar.php" ;

$query = "SELECT * FROM properties LIMIT 6";
$result = mysqli_query($conn, $query);
?>

<div class="filter-section">
    <!-- Same filter as in home.php -->
</div>

<div class="property-list">
    <?php while ($property = mysqli_fetch_assoc($result)) { ?>
        <div class="property-item">
            <img src="path/to/image.jpg" alt="Property Image">
            <h3><?php echo $property['title']; ?></h3>
            <p><?php echo $property['bedrooms']; ?> Bedrooms, <?php echo $property['bathrooms']; ?> Bathrooms</p>
            <p><?php echo $property['price']; ?> USD</p>
            <a href="property_details.php?id=<?php echo $property['id']; ?>">View Details</a>
        </div>
    <?php } ?>
</div>

<div class="pagination">
    <a href="?page=previous">Previous</a>
    <a href="?page=next">Next</a>
</div>
