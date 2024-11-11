<?php
include "includes/db.php" ;
include "includes/auth.php" ;
include "includes/navbar.php" ;

$id = $_GET['id'];
$query = "SELECT * FROM properties WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$property = mysqli_fetch_assoc($result);
?>

<div class="property-details">
    <h2><?php echo $property['title']; ?></h2>
    <p><?php echo $property['description']; ?></p>
    <p>Location: <?php echo $property['location']; ?></p>
    <p>Price: <?php echo $property['price']; ?> USD</p>
    <p>Bedrooms: <?php echo $property['bedrooms']; ?></p>
    <p>Bathrooms: <?php echo $property['bathrooms']; ?></p>
    <p>Garage: <?php echo $property['garage']; ?></p>
    <p>Square Feet: <?php echo $property['square_feet']; ?> sq ft</p>
    <div class="property-images">
        <!-- Additional images can be displayed here -->
    </div>
</div>
