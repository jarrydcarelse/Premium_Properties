<?php
$user_data = check_login($conn);
?>
<nav class="navbar">
    <div class="logo">Logo</div>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="property_list.php">Properties</a></li>
        <li><a href="add_property.php">Add Property</a></li>
        <li><a href="profile.php">Profile</a></li>
    </ul>
    <div class="profile">
        <?php if (isset($user_data)) { ?>
            <a href="profile.php"><img src="path/to/profile-pic.jpg" alt="Profile"></a>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
    </div>
</nav>
