<?php
// Get the current request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Define the old and new URLs
$old_url = '/pujol_manager/login/tusuarios.php';
$new_url = '/pujol_manager/login/tablerousuarios/';

// Check if the current request URI matches the old URL
if (strpos($request_uri, $old_url) === 0) {
    // Redirect to the new URL
    header('Location: '. $new_url);
    exit;
}
?>

