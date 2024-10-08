<?php
require_once "verificacion.php";

$pdo = Conexion::conectar();
$sqlP = "SELECT * FROM servicios WHERE pm_id = :pm_id";
$stmtP = $pdo->prepare($sqlP);
/* $stmtP->bindParam(':pm_id', $_POST['id']); */
$stmtP->execute([':pm_id' => $_POST['id']]);
$stmtPr = $stmtP->fetchAll(PDO::FETCH_ASSOC);
foreach($stmtPr as $stmtProduct):
    //$id = $stmtProduct['id'];
    echo '
    <div class="container">
        <h1 class="text-center text-light">Detalles del Producto</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 mb-1"><img class="img-thumbnail img-fluid center-block" src="data:image/jpeg;base64,'. base64_encode($stmtProduct['pm_photo']) .'"></div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 mb-1"><img class="img-thumbnail img-fluid center-block" src="data:image/jpeg;base64,'.base64_encode($stmtProduct['pm_photo']).'"></div>
                    <div class="col-6 col-sm-6 col-md-6 mb-1"><img class="img-thumbnail img-fluid center-block" src="data:image/jpeg;base64,'.base64_encode($stmtProduct['pm_photo']).'"></div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 mb-1"><img class="img-thumbnail img-fluid center-block" src="data:image/jpeg;base64,'.base64_encode($stmtProduct['pm_photo']).'"></div>
                    <div class="col-6 col-sm-6 col-md-6 mb-1"><img class="img-thumbnail img-fluid center-block" src="data:image/jpeg;base64,'.base64_encode($stmtProduct['pm_photo']).'"></div>
                </div>
            </div>
            <div class="col-md-5">
                <h1 class="text-light">'. $stmtProduct["pm_nombre_servicio"] .'</h1>
                <p class="text-light">'. $stmtProduct["pm_descrition_servicio"] .' </p>
                <h2 class="text-center text-success"><i class="fa fa-dollar"></i> $ '.$stmtProduct["pm_precio"].'</h2><button class="btn btn-primary btn-lg center-block" type="button"><i class="fa fa-cart-plus"></i> Añadir al Carrito</button>
            </div>
        </div>
    </div>
    ';
endforeach;

?>

<!-- <div class="container">
    <h1 class="text-center">Detalles del Producto</h1>
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12"><img class="img-thumbnail img-fluid center-block" src="videomicme.png" /></div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="videomic-me.gif" /></div>
                <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="videomic-me.gif" /></div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="videomic-me.gif" /></div>
                <div class="col-6 col-sm-6 col-md-6"><img class="img-thumbnail img-fluid center-block" src="videomic-me.gif" /></div>
            </div>
        </div>
        <div class="col-md-5">
            <h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin elit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris malesuada rutrum magna. Phasellus maximus nunc eget massa euismod bibendum. Phasellus justo felis, porttitor nec justo eu, vestibulum ultrices neque. Maecenas iaculis euismod tempor. Cras vel pellentesque nunc. Sed sit amet convallis dolor, eget dictum elit. Donec ut justo arcu. Vivamus tincidunt nibh ac sem lobortis semper. Cras vulputate mattis euismod. Morbi accumsan leo in leo condimentum, tincidunt pretium dui scelerisque. Morbi mi dui, vehicula vel velit eget, mattis bibendum lectus. Integer iaculis libero at arcu laoreet aliquam. Cras at libero sapien. Sed luctus erat sit amet est hendrerit faucibus. </p>
            <h2 class="text-center text-success"><i class="fa fa-dollar"></i> RM 318.00</h2><button class="btn btn-primary btn-lg center-block" type="button"><i class="fa fa-cart-plus"></i> Añadir al Carrito</button>
        </div>
    </div>
</div> -->