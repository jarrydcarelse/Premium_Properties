<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include "includes/db.php" ;
include "includes/auth.php" ;
include "includes/navbar.php" ;

$query = "SELECT * FROM properties WHERE status = 'pending'";
$pending_properties = mysqli_query($conn, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $property_id = $_POST['property_id'];
    $action = $_POST['action'];

    if ($action == 'approve') {
        $query = "UPDATE properties SET status = 'approved' WHERE id = '$property_id'";
    } elseif ($action == 'deny') {
        $query = "DELETE FROM properties WHERE id = '$property_id'";
    }

    mysqli_query($conn, $query);
    header("Location: admin.php");
    die;
}
?>

<div class="admin-section">
    <h2>Pending Property Listings</h2>
    <?php while ($property = mysqli_fetch_assoc($pending_properties)) { ?>
        <div class="property-item">
            <img src="<?php echo $property['image']; ?>" alt="Property Image">
            <h4><?php echo $property['title']; ?></h4>
            <p><?php echo $property['location']; ?></p>
            <form method="POST">
                <input type="hidden" name="property_id" value="<?php echo $property['id']; ?>">
                <button type="submit" name="action" value="approve">Approve</button>
                <button type="submit" name="action" value="deny">Deny</button>
            </form>
        </div>
    <?php } ?>
</div>
