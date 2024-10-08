<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'verificacion.php';
require_once 'actividad/paginacion_actividad.php';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Actividades</title>
    <?php require_once "link.php"; ?>
        
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
                <div class="container-fluid">
                <h3 class="text-dark mb-1">Actividad</h3>
                <h6 class="text-dark mb-4"><?php require_once "fecha_dia_hora.php";?></h6>
                    <div class="shopping-cart">
                        <div class="px-4 px-lg-0">
                            <div class="pb-5">
                                <div id="alert_tabla"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                                            <div class="table-responsive" style="background: #9E141A;">
                                                <table class="table">
                                                    <thead>
                                                        <label for="movimientos" class="input-group-text mb-3" style="padding-left: 50%;">Movimientos</label>
                                                        <tr>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="p-2 px-3 text-capitalize">Movimientos</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-capitalize">Botón</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-capitalize">Hora</div>
                                                            </th>
                                                            <!-- <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-capitalize">Eliminar</div>
                                                            </th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        <?php foreach($result_actividad as $respuesta):
                                                        echo '
                                                            <tr>
                                                                <th class="border-0" scope="row">
                                                                    <div class="p-2">
                                                                        <div class="ml-3 d-inline-block align-middle">
                                                                            <h5 class="mb-0"><a style="text-decoration: none;" class="text-dark d-inline-block align-middle" href="#">'.$respuesta['pm_movimiento'].'</a></h5>
                                                                        </div>
                                                                    </div>
                                                                </th>
                                                                <td class="border-0 align-middle"><strong>'.$respuesta['pm_boton'].'</strong></td>
                                                                <td class="border-0 align-middle"><strong>'.$respuesta['pm_hora'].'</strong></td>
                                                                </tr>
                                                                ';
                                                            endforeach;
                                                            ?>
                                                            <!-- <td class="border-0 align-middle"><a type="button" class="text-dark" id="btn_del_serv" name="'.$respuesta["pm_id"].'"><i class="fa fa-trash"></i></a></td> -->
                                                    </tbody>
                                                </table>
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
</div>

            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright text-dark"><span>Copyright © Jeffcompany <?= date('Y') ?></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php require_once "script.php"; ?>
    <script>
        $(document).ready(function(){
            /* $.ajax({
                url: 'carrito.php',
                method: 'GET',
                success: function(done){
                    let node = JSON.parse(done)
                
                console.log(done.categoria)
                
                alert(done.categoria)
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(textStatus, errorThrown)
                }
            })
            .done(function(done){
                console.log(done)
                $("#tbody").html(done)
                $("#alert_tabla").html(
                    `
                    <div class="alert alert-success alert-dismissible" role="alert"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button><span><strong>Carrito de Compras</strong> recuperado!!!</span></div>
                    `
                )

            })
            .error(function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR)
                console.log(textStatus)
                console.log(errorThrown)
            }) */            
        })
        $(document).ready(function(){
            $(document).on('click', '#btn_del_serv', function(){
                let id = $(this).attr('name')
                let nombre = $(this).attr('nombre')
                let categoria = $(this).attr('categoria')
                console.log(id)
                console.log(nombre)
                console.log(categoria)
                if(confirm('Desea Eliminar el siguiente Item: ' + nombre + ', Categoria: ' + categoria))
                {
                    $.ajax({
                        url: 'delItem.php',
                        method: 'POST',
                        data: {id}
                    })
                    .done(function(exito){
                        console.log(exito)
                        $(this).closest('tr').remove()
                        setInterval(function(){
                            location.reload()
                        }, 2000)
                        alert(exito)
                    })
                    .error(function(jqXHR, textStatus, errorThrown){
                        console.log(jqXHR)
                        console.log(textStatus)
                        console.log(errorThrown)
                    })
                }
            })
        })

        /* $(document).ready(function(){
            $.ajax({
                url: 'suma_precios.php',
                method: 'GET',
                success: function(precios){
                    alert(precios)
                }
            })
        }) */

    </script>
</body>

</html>