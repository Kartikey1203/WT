<?php
// Start the session
session_start();

// Check if the session variable is already set
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store username in session
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to avoid form resubmission
    exit();
}

// Handle session destroy (logout)
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page after logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"], a {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        input[type="submit"]:hover, a:hover {
            background-color: #0056b3;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>PHP Session Management Example</h2>

<?php if ($username): ?>
    <div class="output">
        <h3>Welcome, <?php echo $username; ?>!</h3>
        <p>Your session is active.</p>
        <a href="?logout=true">Logout</a>
    </div>
<?php else: ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Enter your username:</label>
        <input type="text" id="username" name="username" required>

        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
