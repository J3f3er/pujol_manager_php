<?php
require_once '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
include '../conexion/conexion.php'; // Include your PDO database connection file

function getUsers() {
    global $pdo;
    $pdo = Conexion::conectar();
    $stmt = $pdo->prepare("SELECT * FROM usuario");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function generatePdf() {
    global $pdo;
    $users = getUsers();

    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">User List</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['nombre']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
    </html>
    <?php
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($content);
    $html2pdf->output('user_list.pdf');
}

generatePdf();
?>