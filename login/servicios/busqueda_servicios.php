<?php
require_once "../../conexion/conexion.php";
$pdo = Conexion::conectar();
$stmt_servicios_b = "SELECT * FROM servicios WHERE pm_nombre_servicio LIKE :pm_nombre_servicio";
$prepare_servicios_b = $pdo->prepare($stmt_servicios_b);
//$prepare_servicios_b->bindParam(':pm_nombre_servicio', $pm_nombre_servicio);
$pm_nombre_servicio = "%".$_POST['pm_nombre_servicio']."%";
$prepare_servicios_b->execute([':pm_nombre_servicio' => $pm_nombre_servicio]);
$result_servicios_b = $prepare_servicios_b->fetchAll(PDO::FETCH_ASSOC);

foreach($result_servicios_b as $result_servicios_b):
    echo '
            <div class="row row_busqueda_servicio" id="row_busqueda_servicio">
                <div class="col-lg-8 mx-auto">
                <ul class="list-group shadow">                    
                    <li class="list-group-item">
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                        <h5 class="mt-0 font-weight-bold mb-2"><strong>Nombre del Producto:</strong> '.$result_servicios_b['pm_nombre_servicio'].'</h5>
                        <p class="font-italic text-muted mb-0 small"></p>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <h6 class="font-weight-bold my-2"><strong>Precio:</strong> $'.$result_servicios_b['pm_precio'].'</h6>
                            <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-warning"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                            </ul>
                        </div>
                        </div><img src="data:image/jpeg;base64,'.base64_encode($result_servicios_b['pm_photo']).'" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div>
                    <div class="row">                    
                        <div class="col-12">
                            <input class="form-control" type="number" name="" id="">
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-info w-100 h-100 text-center text-white">Añadir al carrito</button>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-success w-100 h-100 text-center text-white">Cotizar</button>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            ';
endforeach;
                        /*  <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                            </ul> */
?>
