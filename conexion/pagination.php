<?php
// index.php

//...

// Fetch data from your database
$stmt = $pdo->query('SELECT * FROM usuario');
$totalUsers = $stmt->rowCount();
$usersPerPage = 10;
$numberOfPages = ceil($totalUsers / $usersPerPage);
$currentPage = isset($_GET['page'])? (int) $_GET['page'] : 1;
$offset = ($currentPage - 1) * $usersPerPage;

$stmt = $pdo->prepare('SELECT * FROM users LIMIT :offset, :usersPerPage');
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->bindParam(':usersPerPage', $usersPerPage, PDO::PARAM_INT);
$stmt->execute();
$users = $stmt->fetchAll();

//...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV