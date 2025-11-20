<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <h1>Welcome!</h1>
      <p>
       Hello 
       <?php 
       if (isset($_SESSION['firstName']) || isset($_SESSION['lastName'])) {
           echo htmlspecialchars(($_SESSION['firstName'] ?? '') . ' ' . ($_SESSION['lastName'] ?? ''));
       } elseif (isset($_SESSION['email'])) {
           echo htmlspecialchars($_SESSION['email']);
       } else {
           echo "Guest";
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
