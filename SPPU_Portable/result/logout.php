<?php
if (defined('RESULTS_PORTABLE_MODE') && RESULTS_PORTABLE_MODE) {
    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Results Disabled</title></head><body style='font-family: Arial, sans-serif; padding: 40px;'><h2>Result module is disabled in this portable version.</h2><p>No database server is required to run the main website, so the full Student Result Management System backend is turned off.</p></body></html>";
    exit;
}


session_start(); 
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
unset($_SESSION['login']);
session_destroy(); // destroy session
header("location:index.php"); 
?>

