

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include "includes/db.php";
include "includes/auth.php";
include "includes/navbar.php";

// Fetch some properties to display on the home page
$query = "SELECT * FROM properties WHERE status = 'approved' ORDER BY created_at DESC LIMIT 6";
$properties = mysqli_query($conn, $query);
?>

<!-- Filter Section -->
<div class="filter-section">
    <form action="property_list.php" method="GET">
        <input type="text" name="search" placeholder="Search for properties...">
        <select name="type">
            <option value="">All Types</option>
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
            <option value="condo">Condo</option>
        </select>
        <select name="bedrooms">
            <option value="">Any Bedrooms</option>
            <option value="1">1 Bedroom</option>
            <option value="2">2 Bedrooms</option>
            <option value="3">3 Bedrooms</option>
            <option value="4">4+ Bedrooms</option>
        </select>
        <select name="price">
            <option value="">Any Price</option>
            <option value="100000">Up to R100,000</option>
            <option value="500000">Up to R500,000</option>
            <option value="1000000">Up to R1,000,000</option>
            <option value="2000000">Up to R2,000,000</option>
        </select>
        <button type="submit">Search</button>
    </form>
</div>

<!-- Home Sections -->
<div class="home-sections">
    <div class="column">
        <h3>Sign Up</h3>
        <p>Join us today and find your dream home!</p>
        <a href="signup.php">Sign Up</a>
    </div>
    <div class="column">
        <h3>View Listings</h3>
        <p>Browse through our available properties.</p>
        <a href="property_list.php">View Listings</a>
    </div>
    <div class="column">
        <h3>Buyer's Guide</h3>
        <p>Get tips on buying your new home.</p>
        <a href="#">Buyer's Guide</a>
    </div>
</div>

<!-- About Us Section -->
<div class="about-us">
    <h3>About Us</h3>
    <p>We are a real estate company dedicated to helping you find your perfect home.</p>
</div>

<!-- News and Advice Section -->
<div class="news-advice">
    <div class="news">
        <h3>Latest News</h3>
        <p>Stay updated with the latest real estate news.</p>
        <a href="#">Read More</a>
    </div>
    <div class="advice">
        <h3>Advice</h3>
        <p>Get expert advice on buying and selling properties.</p>
        <a href="#">Get Advice</a>
    </div>
</div>

<!-- Recent Properties Section -->
<div class="property-list">
    <h3>Recent Properties</h3>
    <?php while ($property = mysqli_fetch_assoc($properties)) { ?>
        <div class="property-item">
            <img src="<?php echo $property['image']; ?>" alt="Property Image">
            <h4><?php echo $property['title']; ?></h4>
            <p><?php echo $property['location']; ?></p>
            <p>Bedrooms: <?php echo $property['bedrooms']; ?></p>
            <p>Bathrooms: <?php echo $property['bathrooms']; ?></p>
            <p>Garage: <?php echo $property['garage']; ?></p>
            <p>Square Feet: <?php echo $property['square_feet']; ?></p>
            <a href="property_details.php?id=<?php echo $property['id']; ?>">View Details</a>
        </div>
    <?php } ?>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 Your Real Estate Website</p>
    <p>Follow us on:
        <a href="#">Facebook</a> |
        <a href="#">Twitter</a> |
        <a href="#">Instagram</a>
    </p>
</div>
