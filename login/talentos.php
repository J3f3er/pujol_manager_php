<?php
require_once 'verificacion.php';

require_once "servicios/paginacion__servicios.php";

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Talentos</title>
    <?php require_once "link.php"; ?>
    <style>
        .mw_100px{
            min-width: 710px;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                
                    <div class="image_icon" class="mt-3 mb-3">
                        <img src="data:image/jpeg;base64,<?php echo $ph; ?>" width="180" height="70">
                    </div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <?php
                        require_once 'menu.php';
                    ?>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php require_once "menu_2_1.php"; ?>
            <div class="container py-5 caja_busqueda" id="caja_busqueda"></div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-5">Talentos</h3>
                    <div class="row">
                        <div class="col col-lg-6">
                            
                            <?php
                             if($nivel == 5 || $nivel == 3)
                             {
                                echo '<button type="button" class="btn btn-primary text-white" id="btn_reg_serv"><strong>Registrar Talentos</strong></button> ';
                                echo '<button type="button" class="btn btn-success text-dark"><strong>Excel Talentos</strong></button>'; 
                             } 
                            ?>
                            
                        </div>
                    </div>
                        <div id="block" class="mt-5 mx-5">
                        <div class="container">
                            <div class="row">
                                <?php /* if($nivel == 3){ echo '<button type="button" clas="btn btn-primary">Botón</button>'; } */?>
                                <?php foreach ($result_servicios as $servicios):
                                    if($servicios["pm_moneda"] == 'USD') { $moneda = '$'; } elseif($servicios["pm_moneda"] == 'EUR') { $moneda = '€'; } elseif ($servicios["pm_moneda"] == 'B') { $moneda = 'Bs'; }
                                    $photo = base64_encode($servicios["pm_photo"]);
                                    ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <h4 class="text-center" style="margin-top: 12px;color: rgb(255,109,0);"> <?php echo $servicios["pm_nombre_servicio"]; ?><br></h4>
                                        <hr style="margin-top: 2px;">
                                        <p class="text-center"><strong><?php echo $servicios["pm_dimensiones"]; ?></strong><br></p>
                                        <img class="card-img w-100 d-block" src="data:image/jpeg;base64,<?=$photo;?>" width="218" height="218">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-lg-4 mb-3">
                                                    <span class="input-group-text far fa-eye" id="view_detalles" name="<?=$servicios["pm_id"]?>"></span>
                                                </div>
                                            </div>
                                            <h1 class="text-center" style="color: rgb(255,255,255);background-color: #9E141A;font-size: 18px;">Descripción</h1>
                                            <p class="text-center card-text" style="font-size: 13px;"> <?php echo $servicios["pm_nombre_servicio"]; ?> <br></p>
                                            <p class="text-center card-text" style="font-size: 13px;">Precio: <?php echo $servicios["pm_precio"] . ' ' . $moneda; ?> <br></p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input class="form-control" type="hidden" name="quantity" id="quantity" value="">
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-control" type="hidden" name="pm_nombre" id="pm_nombre" value="<?=$servicios["pm_nombre_servicio"]?>">
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-control" type="hidden" name="price" id="price" value="<?=$servicios["pm_precio"]?>">
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-control" type="hidden" name="id_user" id="id_user" value="<?=$id?>">
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-control" type="hidden" name="<?=$servicios["pm_id"]?>" id="id_servicio" value="<?=$servicios["pm_id"]?>">
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-info w-100 h-100 text-center text-white" id="btn_add_cart" numserv="<?=$servicios["pm_id"]?>" data-bs-target="#modal_watch_add_cart" data-bs-toggle="modal" id="btn_add_cart">Añadir al carrito</button>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-success w-100 h-100 text-center text-white">Cotizar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="pagination" class="d-flex justify-content-center">
                    <?php  
                            if ($pagina_actual > 1) {
                                echo '<a class="pagination-item" href="?pagina=' . ($pagina_actual - 1) . '"><img src="assets/img/icon_arrow-left.svg" /><span>Previos</span></a>';
                            } else {
                                echo '<a class="pagination-item disabled" href="#"><img src="assets/img/icon_arrow-left.svg" /><span>Previos</span></a>';
                            }
                            for ($i = 1; $i <= $total_paginas; $i++) {
                                if ($i == $pagina_actual) {
                                    echo '<a class="pagination-item active" href="#">' . $i . '</a>';
                                } else {
                                    echo '<a class="pagination-item" href="?pagina=' . $i . '">' . $i . '</a>';
                                }
                            }
                            if ($pagina_actual < $total_paginas) {
                                echo '<a class="pagination-item" href="?pagina=' . ($pagina_actual + 1) . '"><span>Siguiente</span><img src="assets/img/icon_arrow-right.svg" /></a>';
                            } else {
                                echo '<a class="pagination-item disabled" href="#"><span>Siguiente</span><img src="assets/img/icon_arrow-right.svg" /></a>';
                            }
                        ?>
            </div>
            <div id="modal-video_priductsD" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-light"><i class="fas fa-paint-roller me-3 text-light"></i>Detalles de Productos</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body sys-box-course-modal">
                            <div id="player-1_product" class="plyr__video-embed"></div>
                            <!-- <div id=""></div> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bootstrap_cards2">
    <!-- <div class="container py-5">
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Bootstrap Cards v2</h1>
        </header>
        <h2 class="font-weight-bold mb-2">From the Shop</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
        <div class="row pb-5 mb-4">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img class="img-fluid d-block mx-auto mb-3" src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt />
                        <h5><a class="text-dark" href="#">Awesome product</a></h5>
                        <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <ul class="list-inline small">
                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                            <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright text-dark"><span>Copyright © JeffCompany <?php echo date('Y') ?></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    
    <div id="modal-reg-servicios" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-white"><i class="fa fa-user-plus me-3"></i><strong>Modal Registro de Servicios</strong></h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body sys-box-course-modal">
                        <div id="player-1" class="plyr__video-embed">
                            <div id="profile" class="container profile profile-view">
                                <div class="row" id="alert-message">
                                    <!-- <div class="col-md-12 alert-col relative">
                                        <div class="alert alert-info alert-dismissible absolue center" role="alert"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button><span id="span_mensaje"></span></div>
                                    </div> -->
                                </div>
                                <form id="form_reg_users">
                                    <div class="row profile-row">
                                        <div class="col-md-12">
                                            <h1 id="label_reg" class="text-white"><strong>Servicios</strong></h1>
                                            <hr />
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3"><label id="label_reg" class="form-label text-white">Nombre del Servicio:</label><input id="serv_nomb" class="form-control" type="text" name="serv_nomb" /></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3"><label id="label_reg" class="form-label text-white">Descripción:</label><textarea name="serv_desc" id="serv_desc" cols="30" rows="10" class="form-control"></textarea></div>
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3"><label id="label_reg" class="form-label text-white">Precio:</label><input id="serv_precio" class="form-control" type="text" name="serv_precio" autocomplete="off" required /></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3"><label id="label_reg" class="form-label text-white">Moneda:</label>
                                                    <select id="serv_moneda" class="form-control text-dark" required name="serv_moneda">
                                                    <option value="0">Selecciones una moneda</option>
                                                    <option value="USD">DOLAR</option>
                                                    <option value="EUR">EURO</option>
                                                    <option value="B">BOLIVARES</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label id="label_reg" class="form-label text-white">Dimensiones: </label>
                                                        <input id="serv_dimensiones" class="form-control" type="text" autocomplete="off" required name="serv_dimensiones" value="" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label id="label_reg" class="form-label text-white">Fotos:</label>
                                                        <input class="form-control text-dark" type="file" name="serv_image" id="serv_image">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label id="label_reg" class="form-label text-white"></label>
                                                        <input id="serv_id" class="form-control" type="hidden" autocomplete="off" required name="serv_id" value="<?=$id?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                                <div class="col-12 col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label id="label_reg" class="form-label text-white"></label>
                                                        <input id="serv_rol" class="form-control" type="hidden" autocomplete="off" required name="serv_rol" value="<?=$nivel?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- <hr /> -->
                                            <div class="row">
                                                <div class="col-md-12 content-right">
                                                    <button class="btn btn-primary form-btn" type="button" id="btn_registrar_serv">GUARDAR</button>
                                                    <button class="btn btn-danger form-btn" type="reset">CANCELAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal añadir al carrito -->

        <div id="modal_watch_add_cart" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white"><i class="fas fa-server me-3"></i>Producto Añadir Al Carrito</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal" style="margin-left: 476.1px;"></button>
            </div>
            <div class="modal-body sys-box-course-modal">
                <div id="player" class="plyr__video-embed">
                    <div id="row_modal_ecommerce" class="row">

                        <!-- información modal -->

                        

                        <!-- fin información modal -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- final Modal añadir al carrito -->

            
    <?php require_once "script.php"; ?>
    <script>
        $(function () {
            $('#datetimepicker1').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $(document).on('click', '#view_detalles', function(){
                let id = $(this).attr('name');
                console.log(id)
                $.ajax({
                    url: 'detalles_products.php',
                    method: 'POST',
                    data: {id}
                })
                .done(function(exito){
                    $("#player-1_product").html(exito)
                    $("#modal-video_priductsD").modal("show")
                })
            })
            $("#btn_reg_serv").click(function(){
                $("#modal-reg-servicios").modal('show')
            })

            /* fin */

            $(document).ready(function() {
                $('#btn_registrar_serv').click(function() {
                    let formData = new FormData($('#form_reg_users')[0]);
                    //let formData = new FormData(this)
                    console.log(formData)
                    $.ajax({
                        url: 'registrar_servicios.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // Aquí puedes manejar la respuesta del servidor
                            console.log(response);
                            $('#form_reg_users')[0].reset()
                            alert('¡¡¡Registro Realizado Con Exito!!!')
                            location.reload()
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            // Aquí puedes manejar los errores
                            console.log(textStatus, errorThrown);
                        }
                    });
                });
            });

            /* fin fin */

            /* $("#btn_registrar_serv").click(function(){
                let serv_id = $("#serv_id").val()
                let serv_rol = $("#serv_rol").val()
                let serv_nomb = $("#serv_nomb").val()
                let serv_desc = $("#serv_desc").val()
                let serv_precio = $("#serv_precio").val()
                let serv_moneda = $("#serv_moneda").val()
                let serv_dimensiones =  $("#serv_dimensiones").val()
                //let serv_image =  $("#serv_image")[0].files[0]
                let serv_image =  $("#serv_image").val()
                console.log(serv_id + ' ' + serv_rol + ' ' + serv_nomb + ' ' + serv_desc + ' ' + serv_precio + ' ' + serv_moneda + ' ' + serv_dimensiones + ' ' + serv_image)
                //alert(id + ' ' + nombre + ' ' + descr + ' ' + precio + ' ' + moneda)
                $.ajax({
                    url: 'registrar_servicios.php',
                    method: 'POST',
                    data: {serv_nomb, serv_desc, serv_precio, serv_moneda, serv_dimensiones, serv_id, serv_rol, serv_image},
                    success: function(exito){
                        console.log(exito)
                    },
                    error: function(xhr, textStatus, errorThrown){
                    console.error(xhr)
                    console.error(textStatus)
                    console.error(errorThrown)
                }
                    //processData: false,
                    //contentType: false,
                })
                
            }) */
        })
        $(document).ready(function(){
            $("#buscar_producto_search").keyup(function(){
                let pm_nombre_servicio = $(this).val()
                if(pm_nombre_servicio.length > 3 )
                {
                    $.ajax({
                        url: 'servicios/busqueda_servicios.php',
                        method: 'POST',
                        data: { pm_nombre_servicio: pm_nombre_servicio },
                        success: function(exitoBusqueda){
                            console.log(exitoBusqueda)
                            $("#caja_busqueda").html(exitoBusqueda)
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            console.error(jqXHR)
                            console.error(textStatus)
                            console.error(errorThrown)
                        }
                    })
                }
                else{
                    if(pm_nombre_servicio.length == ''){
                    $("#row_busqueda_servicio").css('display', 'none')
                    }
                }
            })
            /* $(document).on('click', '#btn_add_cart', function(){
                let pm_cantidad = $("#quantity").val()
                let pm_precio = $("#price").val()
                let pm_id_user = $("#id_user").val()
                let pm_id_servicio = $("#id_servicio").val()
                let pm_nombre = $("#pm_nombre").val()
                let total_mount = pm_cantidad * pm_precio
                console.log(pm_cantidad + ' ' + pm_precio + ' ' + pm_id_user + ' ' + pm_id_servicio + ' ' + pm_nombre + ' ' + total_mount)
                $.ajax({
                    url: 'register_cart_product.php',
                    method: 'POST',
                    data: { pm_cantidad: pm_cantidad, pm_id_user: pm_id_user, pm_id_servicio: pm_id_servicio, pm_nombre: pm_nombre, total_mount: total_mount },
                    success: function(exitoAddCart){
                        console.log(exitoAddCart)
                    }
                })
            }) */
        })

        $(document).ready(function(){
            $(document).on('click', '#btn_add_cart', function(){
                let numserv = $(this).attr("numserv")
                console.log(numserv)
                //
                $.ajax({
                    url: 'find_cart_product.php',
                    method: 'POST',
                    data: { numserv: numserv },
                    success: function(exitofServ){
                        console.log(exitofServ)
                        $("#row_modal_ecommerce").html(exitofServ)
                    }
                })

                /* let pm_cantidad = $("#quantity").val()
                let pm_precio = $(this).attr('precio')
                let pm_id_user = $(this).attr('user')
                let pm_id_servicio = $(this).attr('serv')
                let pm_nombre = $(this).attr('nombre')
                //let total_mount = pm_cantidad * pm_precio
                console.log(pm_cantidad + ' ' + pm_precio + ' ' + pm_id_user + ' ' + pm_id_servicio + ' ' + pm_nombre)
                $.ajax({
                    url: 'register_cart_product.php',
                    method: 'POST',
                    data: { pm_cantidad: pm_cantidad, pm_id_user: pm_id_user, pm_id_servicio: pm_id_servicio, pm_nombre: pm_nombre, pm_precio: pm_precio },
                    success: function(exitoAddCart){
                        console.log(exitoAddCart)
                    }
                }) */
            })
        })
        $(document).ready(function(){
            $(document).on("click", "#anadir_al_carrito", function(){
                let quantity_cantidad = $("#quantity_cantidad").val()
                let producto_nombre = $("#producto_nombre").val()
                let producto_precio = $("#producto_precio").val()
                let date_fecha = $("#date_fecha").val()
                let producto_user = $("#producto_user").val()
                let producto_id = $("#producto_id").val()
                let cantidad_total = quantity_cantidad * producto_precio
                console.log(quantity_cantidad + ' ' + producto_nombre + ' ' + producto_precio + ' ' + producto_user + ' ' + cantidad_total + ' ' + date_fecha + ' ' + producto_id)
                $.ajax({
                    url: 'register_cart_product.php',
                    method: 'POST',
                    data: { quantity_cantidad, producto_nombre, producto_user, date_fecha, cantidad_total, producto_id },
                    success: function(exitoRegister){
                        alert(exitoRegister.Mensaje)
                        $("#modal_watch_add_cart").modal("hide")                        
                    }
                })
            })
        })

    </script>
<!-- https://www.blackbox.ai/share/fb004b23-62f8-4997-8105-786c28f180ce -->
</body>

</html>