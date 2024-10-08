<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'verificacion.php';
//require_once 'carrito.php';
require_once 'carritosuma.php';
$smtmBc = $pdo->query("SELECT * FROM breadcrumb WHERE pm_niveles LIKE '%". $nivel . "%' AND pm_action = 'Carrito'");
$smtmBcResult = $smtmBc->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Carrito de Compras</title>
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
                <!-- <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div> -->
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <?php require_once "menu_2_1.php"; ?>
                <div>
                    <marquee behavior="alternate" class="bg-dark" direction="right" style="color: #ffffff; font-size: 20px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;"onmousedown="this.stop()" onmouseup="this.start()">Tasa del dia en 39.48 bs</marquee>
                </div>
                <!-- <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> -->
                <!-- <div class="container-fluid">
                    <h3 class="text-dark mb-1">Carrito De Compras</h3>
                </div> -->
                <div class="container-fluid">
                <h3 class="text-dark mb-1">Carrito de Compras</h3>
                <h6 class="text-dark mb-1"><?php require_once "fecha_dia_hora.php"; ?></h6>
                <ol class="breadcrumb">
                    <?php foreach($smtmBcResult as $smtmBcResult):
                    echo $smtmBcResult["pm_link"];
                    endforeach; 
                    ?>
                </ol>
                    <div class="shopping-cart">
                        <div class="px-4 px-lg-0">
                            <div class="pb-5">
                                <div id="alert_tabla"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="p-2 px-3 text-uppercase">Producto</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-uppercase">Precio</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-uppercase">Cantidad</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-uppercase">Fecha De Solicitud</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-uppercase">Fecha De Creación</div>
                                                            </th>
                                                            <th class="border-0 bg-light" scope="col">
                                                                <div class="py-2 text-uppercase">Eliminar</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                                        <!-- <div class="col-lg-6" id="cantidad_precio">
                                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Código promocional</div>
                                            <div class="p-4">
                                                <p class="font-italic mb-4">Si tiene un código de cupón, ingréselo en el cuadro a continuación</p>
                                                <div class="input-group mb-4 border rounded-pill p-2"><input class="form-control border-0" type="text" placeholder="Aplicar cupón" aria-describedby="button-addon3" />
                                                    <div class="input-group-append border-0"><button id="button-addon3" class="btn btn-dark px-4 rounded-pill" type="button"><i class="fa fa-gift mr-2"></i>Aplicar cupón</button></div>
                                                </div>
                                            </div>
                                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">instrucciones para el vendedor</div>
                                            <div class="p-4">
                                                <p class="font-italic mb-4">Si tienes alguna información para el vendedor puedes dejarla en el cuadro a continuación.</p><textarea class="form-control" name cols="30" rows="2"></textarea>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Resumen del pedido </div>
                                            <div class="p-4">
                                                <p class="font-italic mb-4">Los costos de envío y adicionales se calculan en función de los valores que haya ingresado.</p>
                                                <ul class="list-unstyled mb-4">
                                                    <?php
                                                    $sqlCarritoS = "SELECT SUM(pm_precio) As TotalP  FROM `carrito` WHERE pm_id_user = :pm_id_user";
                                                    $stmtSC = $pdo->prepare($sqlCarritoS);
                                                    $stmtSC->bindParam(':pm_id_user', $id);
                                                    $stmtSC->execute();
                                                    $respSC = $stmtSC->fetchAll(PDO::FETCH_ASSOC);
                                                     foreach($respSC as $respuSC):
                                                    echo '
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal de Orden: </strong><strong>$'.$respuSC['TotalP'].'</strong></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Numero de Referencia: </strong><input type="text" name="referencia" class="form-control" id="referencia" value=""></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tasa: </strong><strong>$0.00</strong></li>
                                                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total: </strong>
                                                                <h5 class="font-weight-bold">$'.$respuSC['TotalP'].'</h5>
                                                            </li>
                                                        ';
                                                        endforeach;
                                                    ?>
                                                </ul><a class="btn btn-primary rounded-pill py-2 btn-block" href="#">Pagar</a>
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

        $(document).ready(function(){
            $.ajax({
                url: 'carrito.php',
                method: 'GET',
                success: function(carrito){
                    console.log(carrito)
                    $("#tbody").html(carrito)
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