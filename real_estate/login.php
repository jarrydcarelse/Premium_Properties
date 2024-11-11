<?php

include "includes/db.php";
include "includes/auth.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Note: It's crucial to use prepared statements to avoid SQL injection attacks
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password_hash = ?");
    $stmt->bind_param("ss", $username, $passwordHash);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Assuming you're storing hashed passwords
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: home.php");
        die;
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="signup.php">Sign up here</a></p>
