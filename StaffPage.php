<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'viktor' && $password === 'viktor@cool') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: StaffPage.php');
        exit;
    } else {
        // Invalid login credentials, display error message
        echo "<script>alert('Invalid username or password. Please try again.'); window.location.href = 'StaffLogin.html';</script>";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_SESSION['username']) || !isset($_SESSION['password']) || $_SESSION['username'] !== 'viktor' || $_SESSION['password'] !== 'viktor@cool') {
        header('Location: StaffLogin.html');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Cafe - Staff Page</title>
    <style>
        /* Your CSS styling goes here */
    </style>
</head>

<body>
    <header>
        <h1>Coffee Cafe - Staff Page</h1>
    </header>

    <!-- Staff page -->
    <div class="staff-container">
        <h1>Staff Page</h1>

        <button class="back-button" onclick="goBack()">Back</button>
        <button class="logout-button" onclick="logout()">Logout</button>

        <ul class="order-list">
            <!-- Orders will be dynamically added here -->
        </ul>
    </div>

    <footer>
        <p>&copy; 2023 Coffee Cafe. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript code goes here

        // Go back to the login page
        function goBack() {
            window.location.href = 'StaffLogin.html';
        }

        // Logout from the staff page
        function logout() {
            window.location.href = 'StaffLogin.html';
        }
    </script>
</body>

</html>