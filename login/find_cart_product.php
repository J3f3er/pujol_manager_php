<?php
require_once "verificacion.php";
$pdo = Conexion::conectar();
$sql = "SELECT * FROM servicios WHERE pm_id = :pm_id";
$stmt = $pdo->prepare($sql);
$numserv = $_POST['numserv'];
$stmt->execute([
    ':pm_id' => $numserv
]);
$resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($resp as $resp):
    echo '
                        <div class="col-12 col-md-5">
                            <div id="bs4_sldr_commerce" class="carousel slide bs4-carousel bs4_sldr_cmrce_indicators thumb-scroll-x swipe-x bs4s_easeOutInCubic" data-duration="2000" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="false">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" /></div>
                                    <div class="carousel-item"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_02" /></div>
                                    <div class="carousel-item"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_03" /></div>
                                    <div class="carousel-item"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_04" /></div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li class="active" data-bs-target="#bs4_sldr_commerce" data-bs-slide-to="0"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_01" /></li>
                                    <li data-bs-target="#bs4_sldr_commerce" data-bs-slide-to="1"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_02" /></li>
                                    <li data-bs-target="#bs4_sldr_commerce" data-bs-slide-to="2"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_03" /></li>
                                    <li data-bs-target="#bs4_sldr_commerce" data-bs-slide-to="3"><img src="data:image/jpeg;base64,'.base64_encode($resp["pm_photo"]).'" alt="bs4_slider_commerce_04" /></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="bs4_sldr_cmrce_txt">
                                <h1 class="text-white">Nombre del producto: <strong>'.$resp["pm_nombre_servicio"].'</strong></h1>
                                <ul>
                                    <li><i class="fa fa-star text-warning"></i></li>
                                    <li><i class="fa fa-star text-warning"></i></li>
                                    <li><i class="fa fa-star text-warning"></i></li>
                                    <li><i class="fa fa-star text-warning"></i></li>
                                    <li><i class="fa fa-star text-warning"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <h2 class="bs4_sldr_cmrce_txt text-white">$'.$resp["pm_precio"].'</h2>
                                <p style="font-size: 15px;font-weight: 200;" class="text-white">'.$resp["pm_descrition_servicio"].'</p>
                                <form action="#">
                                <div class="bs4_form_num"><label class="form-label text-white"><strong>Cantidad: <strong></label><input class="form-control w-100 mw_100px" type="number" id="quantity_cantidad" name="quantity_cantidad" min="1" max="20" /></div>
                                    <div class="bs4_form_num"><label class="form-label text-dark"><strong><strong></label><input class="form-control w-100" type="hidden" id="producto_nombre" name="'.$resp["pm_nombre_servicio"].'" value="'.$resp["pm_nombre_servicio"].'"</div>
                                    <div class="bs4_form_num"><label class="form-label text-dark"><strong><strong></label><input class="form-control w-100" type="hidden" id="producto_precio" name="'.$resp["pm_precio"].'" value="'.$resp["pm_precio"].'"</div>
                                    <div class="bs4_form_num"><label class="form-label text-dark"><strong><strong></label><input class="form-control w-100" type="hidden" id="producto_id" name="'.$resp["pm_id"].'" value="'.$resp["pm_id"].'"</div>
                                    <div class="bs4_form_num"><label class="form-label text-dark"><strong><strong></label><input class="form-control w-100" type="hidden" id="producto_user" name="'.$id.'" value="'.$id.'"</div>
                                    <h2 class="text-white">Fecha de Solicitud</h2>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="date" id="date_fecha" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs4_form_cmrce_btn"><button id="anadir_al_carrito" class="btn btn-primary bs4_btn_x_out_shtr" type="button">Añadir al carrito</button></div>
                                    </form>
                                    </div>
                                    </div>
                                    ';
                                endforeach;
                                /* <div class="bs4_form_num"><label class="form-label"><strong><strong></label><input class="form-control w-100" type="hidden" id="quantity_cantidad_hidden" name="quantity_cantidad_hidden" min="1" max="20" /></div> */
                                /* <div class="bs4_form_size"><label class="form-label">size</label><select class="form-select">
                                <optgroup label="select a size">
                                            <option value="12" selected>18</option>
                                            <option value="13">25</option>
                                            <option value="14">36</option>
                                        </optgroup>
                                    </select></div>
                                 <div class="bs4_form_color"><label class="form-label">colours</label><select class="form-select form-select-sm">
                                <optgroup label="Pick a color">
                                    <option value="12" selected>RED</option>
                                    <option value="13">BLUE</option>
                                    <option value="14" selected>GREEN</option>
                                </optgroup>
                            </select></div> */
                    /* echo "Nombre: " . $resp['pm_nombre_servicio'] . '<br>';
                    echo "Descrición: " . $resp['pm_descrition_servicio'] . '<br>'; */

?>