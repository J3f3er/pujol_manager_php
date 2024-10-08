<?php

require_once "verificacion.php";

/* // Database connection
$pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

// Get the image file
$image = file_get_contents($_FILES['image']['tmp_name']);

// Prepare the SQL statement
$stmtIm = $pdo->prepare("UPDATE usuario SET image = :image WHERE id = :id");

// Bind the parameters
$stmtIm->bindParam(':image', $image, PDO::PARAM_LOB);
$stmtIm->bindParam(':id', $_POST['id'], PDO::PARAM_INT);

// Execute the statement
$stmtIm->execute();

// Return a success message
echo 'Image updated successfully'; */

$idIm = $_POST['id'];
$fileIm = $_FILES['files'];

// Check if the file is valid
if ($fileIm['error'] === UPLOAD_ERR_OK) {
    // Get the file contents
    $fileImContent = file_get_contents($fileIm['tmp_name']);

    // Update the image in the database
    $stmtIm = $pdo->prepare("UPDATE usuario SET image = :image WHERE id = :id");
    $stmtIm->bindParam(':image', $fileImContent, PDO::PARAM_LOB);
    $stmtIm->bindParam(':id', $idIm, PDO::PARAM_INT);
    $stmtIm->execute();

    // Return a success response
    echo 'Image updated successfully!';
} else {
    // Return an error response
    echo 'Error uploading file: '. $fileIm['error'];
}

?>