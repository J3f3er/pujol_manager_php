<?php
require_once "../vendor/autoload.php";
require_once "verificacion.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$pdo = Conexion::conectar();

$stmtExcel = $pdo->prepare("SELECT * FROM usuario");
$stmtExcel->execute();

$users = $stmtExcel->fetchAll(PDO::FETCH_ASSOC);
//$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$row = 2;
foreach($users as $user)
{
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Nombre');
    $sheet->setCellValue('C1', 'Apellido');
    $sheet->setCellValue('D1', 'Correo');
    $sheet->setCellValue('E1', 'Area');
    $sheet->setCellValue('F1', 'Telefono');
    $sheet->setCellValue('G1', 'Contrasena');
    $sheet->setCellValue('H1', 'Roles');
    //$row++;
    $sheet->setCellValue('A' . $row, $user['pm_id']);
    $sheet->setCellValue('B' . $row, $user['pm_nombre']);
    $sheet->setCellValue('C' . $row, $user['pm_apellido']);
    $sheet->setCellValue('D' . $row, $user['pm_correo']);
    $sheet->setCellValue('E' . $row, $user['pm_area_tel']);
    $sheet->setCellValue('F' . $row, $user['pm_num_tel']);
    $sheet->setCellValue('G' . $row, $user['pm_conf_contrasena']);
    if($user['pm_nivel'] == 1)
    {
        $sheet->setCellValue('H' . $row, $user['pm_nivel'] = 'Cliente');
    }
    elseif($user['pm_nivel'] == 2)
    { 
        $sheet->setCellValue('H' . $row, $user['pm_nivel'] = 'Talento');
    }
    elseif($user['pm_nivel'] == 3)
    {
        $sheet->setCellValue('H' . $row, $user['pm_nivel'] = 'Reclutador');
    }
    elseif($user['pm_nivel'] == 4)
    { 
        $sheet->setCellValue('H' . $row, $user['pm_nivel'] = 'Administrador');
    }
    elseif($user['pm_nivel'] == 5)
    { 
        $sheet->setCellValue('H' . $row, $user['pm_nivel'] = 'Master');
    }
    $row++;
}

//$writter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writter = new Xlsx($spreadsheet);
//$writter->save('lista_usuarios.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="lista_usuarios.xlsx"');
header('Cache-Control: max-age=0');
$writter->save('lista_usuarios.xlsx');

$sourse = 'lista_usuarios.xlsx';
$destino = 'C:/carpeta_para_excel/lista_usuarios.xlsx';

if(file_exists('lista_usuarios.xlsx'))
{
    mkdir('C:/carpeta_para_excel/', 0777);
    copy($sourse, $destino);
}
echo 'Excel generado exitosamente';

/* $source = 'lista_usuarios.xlsx';
$destino = 'C:\\lista_usuarios.xlsx';

if(file_exists($source))
{
    if(copy($source, $destino))
    {
        echo 'Archivo movido exitosamente';
    }
    else
    {
        echo 'Ocurrio un error mientras se hacia el cambio';
    }
}
else
{
    echo 'El archivo no existe';
} */

/* header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="usuariosPhp.xls"');

echo '<table>';
echo '<tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Nivel</th>
    </tr>'; // Assuming you have these columns in your table
foreach($users as $users)
{
    echo '<tr>
            <th>${users["pm_id"]}</th>
            <th>${users["pm_nombre"]}</th>
            <th>${users["pm_apellido"]}</th>
            <th>${users["pm_correol"]}</th>
            <th>${users["pm_conf_contrasena"]}</th>
            <th>${users["pm_nivel"]}</th>
        </tr>';    
}

echo '</table>'; */

?>