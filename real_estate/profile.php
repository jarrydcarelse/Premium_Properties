<?php
include "includes/db.php" ;
include "includes/auth.php" ;
include "includes/navbar.php" ;

$user_data = check_login($conn);
$user_id = $user_data['id'];

$query = "SELECT * FROM properties WHERE liked_by = '$user_id'";
$liked_properties = mysqli_query($conn, $query);

$query2 = "SELECT * FROM properties WHERE saved_by = '$user_id'";
$saved_properties = mysqli_query($conn, $query2);
?>

<div class="profile-details">
    <h2>Your Profile</h2>
    <p>Name: <?php echo $user_data['name']; ?></p>
    <p>Username: <?php echo $user_data['username']; ?></p>
    <p>Email: <?php echo $user_data['email']; ?></p>
</div>

<div class="liked-properties">
    <h3>Liked Properties</h3>
    <?php while ($property = mysqli_fetch_assoc($liked_properties)) { ?>
        <div class="property-item">
            <img src="<?php echo $property['image']; ?>" alt="Property Image">
            <h4><?php echo $property['title']; ?></h4>
            <p><?php echo $property['location']; ?></p>
            <a href="property_details.php?id=<?php echo $property['id']; ?>">View Details</a>
        </div>
    <?php } ?>
</div>

<div class="saved-properties">
    <h3>Saved Properties</h3>
    <?php while ($property = mysqli_fetch_assoc($saved_properties)) { ?>
        <div class="property-item">
            <img src="<?php echo $property['image']; ?>" alt="Property Image">
            <h4><?php echo $property['title']; ?></h4>
            <p><?php echo $property['location']; ?></p>
            <a href="property_details.php?id=<?php echo $property['id']; ?>">View Details</a>
        </div>
    <?php } ?>
</div>
