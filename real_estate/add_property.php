<?php
include("includes/db.php");
include("includes/auth.php");
include("includes/navbar.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $garage = $_POST['garage'] ;
    $square_feet = $_POST['square_feet'];

    // Image upload logic
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["property_image"]["name"]);
    move_uploaded_file($_FILES["property_image"]["tmp_name"], $target_file);

    $query = "INSERT INTO properties (title, description, location, price, bedrooms, bathrooms, garage, square_feet, image)
              VALUES ('$title', '$description', '$location', '$price', '$bedrooms', '$bathrooms', '$garage', '$square_feet', '$target_file')";
              
    mysqli_query($conn, $query);

    header("Location: property_list.php");
    die;
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="text" name="location" placeholder="Location" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="bedrooms" placeholder="Bedrooms" required>
    <input type="number" name="bathrooms" placeholder="Bathrooms" required>
    <input type="number" name="garage" placeholder="Garage" required>
    <input type="number" name="square_feet" placeholder="Square Feet" required>
    <input type="file" name="property_image" required>
    <button type="submit">Add Property</button>
</form>

