<?php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Use assoc arrays by default
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pagination_talentos = 'SELECT * FROM servicios';
$pdoStatement = $pdo->query($pagination_talentos);

$total_of_rows = $pdoStatement->rowCount();

$limit3 = 3;

$page_talentoss = ceil($total_of_rows / $limit3);

if (!isset($_GET['page_taltentos'])) {
    $page_talentos = 1;
} else {
    $page_talentos = $_GET['page_taltentos'];
}

$page_talentos = filter_var($page_talentos, FILTER_SANITIZE_NUMBER_INT);

$offset = ($page_talentos - 1) * $limit3;

$pagination_talentos = 'SELECT * FROM servicios LIMIT ?, ?';
$pega_talentos = $pdo->prepare($pagination_talentos);
$pega_talentos->bindParam(1, $offset, PDO::PARAM_INT);
$pega_talentos->bindParam(2, $limit3, PDO::PARAM_INT);
$pega_talentos->execute();

$result_talentos = $pega_talentos->fetchAll();

/* for ($i = 0; $i < count($result_talentos); $i++) {
    echo 'ID: ' . $result_talentos[$i]['pm_id'] . ' | Nombre: ' . $result_talentos[$i]['pm_nombre_servicio'] . '<br/>';
    echo 'Descripción: ' . $result_talentos[$i]['pm_descrition_servicio'] . ' | Precio: ' . $result_talentos[$i]['pm_precio'] . '<br/>';
    echo 'Moneda: ' . $result_talentos[$i]['pm_moneda'] . ' | Dimensiones: ' . $result_talentos[$i]['pm_dimensiones'] . '<br/>';
} */

/* Start pagination_servicios - Next and Previous */

/* if ($page_talentos == 1) {
    echo ' <p class="pagination_servicios"> <a href="">« Previous</a> ';
} else {
    $prev = $page_talentos - 1;
    echo ' <p class="pagination_servicios"> <a href="?page_taltentos=' . $prev . '">« Previous</a> ';
}

for ($i = 1; $i <= $page_talentoss; $i++) {
    if ($i == $page_talentos) {
        echo '<p class="pagination_servicios"> ' .  $i . ' </p> ';
    } else {
        echo ' <p class="pagination_servicios"> <a href="?page_taltentos=' . $i . '">' . $i . '</a> ';
    }
}

if ($page_talentos == $page_talentoss) {
    echo ' <p class="pagination_servicios"> <a href="">Next »</a> </p> ';
} else {
    $next = $page_talentos + 1;
    echo ' <p class="pagination_servicios"> <a href="?page_taltentos=' . $next . '">Next »</a> </p> ';
} */

?>