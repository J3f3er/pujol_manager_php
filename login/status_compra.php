<?php
require_once "verificacion.php";

$pdo = Conexion::conectar();
$stmt = $pdo->prepare("SELECT * FROM carrito WHERE pm_id_user = :pm_id_user AND pm_status = 0");
$stmt->execute([
    ':pm_id_user' => $id,
]);
$carrito = $stmt->fetchAll(PDO::FETCH_ASSOC);
$uStmt = $pdo->prepare("UPDATE carrito SET pm_nombre = :pm_nombre, pm_categoria = :pm_categoria, pm_precio = :pm_precio, pm_cantidad = :pm_cantidad, pm_imagen = :pm_imagen, pm_id_user = :pm_id_user, pm_id_servicio = :pm_id_servicio, pm_referencia = :pm_referencia, pm_fecha = :pm_fecha, pm_Fcreado = :pm_Fcreado, pm_status = :pm_status");
foreach($carrito as $carrito)
{
$uStmt->execute([
    ':pm_nombre' => $carrito['pm_nombre'],
    ':pm_categoria' => $carrito['pm_categoria'],
    ':pm_precio' => $carrito['pm_precio'],
    ':pm_cantidad' => $carrito['pm_cantidad'],
    ':pm_imagen' => $carrito['pm_imagen'],
    ':pm_id_user' => $carrito['pm_id_user'],
    ':pm_id_servicio' => $carrito['pm_id_servicio'],
    ':pm_referencia' => $carrito['pm_referencia'],
    ':pm_fecha' => $carrito['pm_fecha'],
    ':pm_Fcreado' => $carrito['pm_Fcreado'],
    ':pm_status' => $carrito['pm_status'],
]);
}
$html = '';
if($carrito['pm_status'] == 0)
{
    $html .= '
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-start">Detalle del Pedido<br /><br /></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 align-self-center">
                    <label class="form-label text-center d-inline-flex justify-content-xl-center align-items-xl-center" style="width: 99%;background-color: #9e141a;height: 31px; color: white;"><strong>Realizar Pedido</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 30px; color: white;"><strong>Pago Correcto</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 30px; color: white;"><strong>En Espera</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Envio</strong><br /></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Pedido Completado</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none invisible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><br /><br />N.º Referencia   :       '.$carrito['pm_referencia'].'<br />Fecha           :        '.$carrito['pm_fecha'].'<br />Estado          :        Realizar Pedido<br /><br /></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Detalle de Productos</h2>
                    <div class="gift row">
                        <div class="gift__img col-sm-3 col-12"><img src="data:image/jpeg;base64,'.base64_encode($carrito['pm_imagen']).'" />
                            <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
                        </div>
                        <div class="gift__info col-sm-9 col-12">
                            <h4 class="gift__name">'.$carrito['pm_nombre'].'<br /></h4>
                            <div class="gift__details">
                                <p><br />'.$carrito['pm_categoria'].'</p>
                            </div>
                            <div class="gift__bottom row">
                                <div class="gift__price-wrap col-12 col-sm-6">
                                    <div class="gift__normal-price"></div>
                                    <div class="gift__today-price"></div>
                                    <h3 class="gift__name">Precio: $'.$carrito['pm_precio'].'</h3>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}elseif($carrito['pm_status'] == 1)
{
$html .= '
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-start">Detalle del Pedido<br /><br /></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 align-self-center">
                    <label class="form-label text-center d-inline-flex justify-content-xl-center align-items-xl-center bg-success" style="width: 99%;height: 31px; color: white;"><strong>Realizar Pedido</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 30px; color: white;"><strong>Pago Correcto</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 30px; color: white;"><strong>En Espera</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Envio</strong><br /></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Pedido Completado</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none invisible" style="width: 1%;color: #ff4000;height: 24px;"></i>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" align="center"><img src="checked.svg" style="width: 100px;margin: 15px;" />
                            <h1>Pago realizado correctamente</h1>
                            <div class="text-start" align="center">
                                <h1 class="text-center h4">Espera tu correo de verificacion luego          <br />podras realizar el seguimiento de tu pedido<br /><br /></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" align="right" style="margin: 0px;height: 39px;"><a href="#" class="btn btn-success">Seguir comprando</a></div>
                        <div class="col-md-6" align="left"><a href="#" class="btn btn-light">Salir</a></div>
                    </div>
                </div>
            </div>
';
}elseif($carrito['pm_status'] == 2)
{
    $html .= '
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-start">Detalle del Pedido<br /><br /></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 align-self-center">
            <label class="form-label text-center d-inline-flex justify-content-xl-center align-items-xl-center bg-success" style="width: 99%;height: 31px; color: white;"><strong>Realizar Pedido</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
        </div>
        <div class="col-md-3">
            <label class="form-label text-center bg-success" style="width: 99%;height: 30px; color: white;"><strong>Pago Correcto</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
        </div>
        <div class="col-md-3">
            <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 30px; color: white;"><strong>En Espera</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
        </div>
        <div class="col-md-3">
            <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Envio</strong><br /></label><i class="fas fa-angle-double-right border rounded-0 float-none visible" style="width: 1%;color: #ff4000;height: 24px;"></i>
        </div>
        <div class="col-md-3">
            <label class="form-label text-center" style="width: 99%;background-color: #ff9900;height: 31px; color: white;"><strong>Pedido Completado</strong></label><i class="fas fa-angle-double-right border rounded-0 float-none invisible" style="width: 1%;color: #ff4000;height: 24px;"></i>
        </div>
    </div>
';
}
echo $html;
/* <div class="gift__cta-wrap col-12 col-sm-6"><a class="flux_cta gift__cta" target="_blank" href="#" style="background-color: #ff8000;">Danos tu Opinion   <i class="far fa-comments"></i></a><span class="gift__cta-note">34 ya dejaron un comentario </span></div> */

?>