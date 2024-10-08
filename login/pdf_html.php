<?php
require_once "verificacion.php";
require_once "../vendor/autoload.php";
use Spipu\Html2Pdf\Html2Pdf;
$pdo = Conexion::conectar();
$sqlUsPdf = "SELECT * FROM usuario";
$stmtUsPdf = $pdo->prepare($sqlUsPdf);
$stmtUsPdf->execute();
$user = $stmtUsPdf->fetchAll(PDO::FETCH_ASSOC);
ob_start();
$content = ob_get_clean();
$html2pdf = new Html2Pdf();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search.css">
    <title>Document</title>
</head>
<body>
    <?php
    echo '
<div class="col-md-12 search-table-col">
    <div class="form-group pull-right col-lg-4"><input class="search form-control" type="text" placeholder="Search by typing here.." /></div><span class="counter pull-right"></span>
    <div class="table-responsive table table-hover table-bordered results">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd-1" class="col-lg-1">#</th>
                    <th id="trs-hd-2" class="col-lg-2">Nombre</th>
                    <th id="trs-hd-3" class="col-lg-3">Apellido</th>
                    <th id="trs-hd-4" class="col-lg-2">Correo</th>
                    <th id="trs-hd-5" class="col-lg-2">Roles</th>
                </tr>
            </thead>
            <tbody>';
                foreach($user as $user):
                echo'
                <tr>
                    <th>'.$user["pm_id"].'</th>
                    <th>'.$user["pm_nombre"].'</th>
                    <th>'.$user["pm_apellido"].'</th>
                    <th>'.$user["pm_correo"].'</th>
                    <th>'.$user["pm_nivel"].'</th>
                </tr>
                ';
                endforeach;
                echo '
            </tbody>
        </table>
    </div>
</div>';
                ?>
</body>
</html>
<?php
/* $content = ob_get_clean();
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output('lista_usuarios.pdf'); */
$content = ob_get_clean();
$html2pdf->writeHTML($content);
$html2pdf->output('lista_usuarios.pdf');
$sourse = 'lista_usuarios.pdf';
$destino = 'C:/carpeta_para_pdf/lista_usuarios.pdf';
if(file_exists('lista_usuarios.pdf'))
{
    mkdir('C:/carpeta_para_pdf/', 0777);
    copy($sourse, $destino);
}
echo 'Pdf Generado Exitosamente';
?>