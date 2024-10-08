<?php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Use assoc arrays by default
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pagination = 'SELECT * FROM usuario';
$pdoStatement = $pdo->query($pagination);

$total_of_rows = $pdoStatement->rowCount();

$limit = 10;

$pages = ceil($total_of_rows / $limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$page = filter_var($page, FILTER_SANITIZE_NUMBER_INT);

$offset = ($page - 1) * $limit;

$pagination = 'SELECT * FROM usuario LIMIT ?, ?';
$pega = $pdo->prepare($pagination);
$pega->bindParam(1, $offset, PDO::PARAM_INT);
$pega->bindParam(2, $limit, PDO::PARAM_INT);
$pega->execute();

$result = $pega->fetchAll();

/* for ($i = 0; $i < count($result); $i++) {
    echo 'User ID: ' . $result[$i]['pm_id'] . ' | Username: ' . $result[$i]['pm_nombre'] . '<br/>';
}*/

/* Start pagination - Next and Previous */
/*if ($page == 1) {
    echo ' <p class="pagination"> <a href="">« Previous</a> ';
} else {
    $prev = $page - 1;
    echo ' <p class="pagination"> <a href="?page=' . $prev . '">« Previous</a> ';
}

for ($i = 1; $i <= $pages; $i++) {
    if ($i == $page) {
        echo '<p class="pagination"> ' .  $i . ' </p> ';
    } else {
        echo ' <p class="pagination"> <a href="?page=' . $i . '">' . $i . '</a> ';
    }
}

if ($page == $pages) {
    echo ' <p class="pagination"> <a href="">Next »</a> </p> ';
} else {
    $next = $page + 1;
    echo ' <p class="pagination"> <a href="?page=' . $next . '">Next »</a> </p> ';
} */
?>