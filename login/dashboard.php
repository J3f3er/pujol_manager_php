<?php

require_once 'verificacion.php';
/* require_once "../conexion/conexion.php";
$pdo = Conexion::conectar();
*/

//echo "Este Nivel es: " . $nivel;

$stmt = $pdo->query("SELECT * FROM usuario");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $pdo->query("SELECT * FROM breadcrumb WHERE pm_niveles LIKE '%".$nivel."%' AND pm_action = 'Tabla'");
//$stmt2 = $pdo->query("SELECT * FROM breadcrumb WHERE pm_niveles = $nivel");
$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $pdo->query("SELECT * FROM servicios");
$result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

$stmt4 = $pdo->query("SELECT * FROM talento");
$result4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);

/* if($nivel != 3)
{
    header('Location: http://localhost/pujol_manager/login/blank.php');
} */

/* $pagination = $pdo->query('SELECT * FROM usuario');
$totalUsers = $pagination->rowCount();
$usersPerPage = 10;
$numberOfPages = ceil($totalUsers / $usersPerPage);
$currentPage = isset($_GET['page'])? (int) $_GET['page'] : 1;
$offset = ($currentPage - 1) * $usersPerPage;

$paginations = $pdo->prepare('SELECT * FROM usuario LIMIT :offset, :usersPerPage');
$paginations->bindParam(':offset', $offset, PDO::PARAM_INT);
$paginations->bindParam(':usersPerPage', $usersPerPage, PDO::PARAM_INT);
$paginations->execute();
$users = $paginations->fetchAll(); */

require_once "pagination_usuario.php";

require_once "pagination_servicios.php";

//print_r($result);
/* require_once "../conexion/conexion.php";
$pdo = Conexion::conectar();
$stmt = $pdo->query("SELECT * FROM usuario");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmts = $pdo->query('SELECT * FROM usuario');
$totalUsers = $stmts->rowCount();
$usersPerPage = 10;
$numberOfPages = ceil($totalUsers / $usersPerPage);
$currentPage = isset($_GET['page'])? (int) $_GET['page'] : 1;
$offset = ($currentPage - 1) * $usersPerPage;

$stmtss = $pdo->prepare('SELECT * FROM usuario LIMIT :offset, :usersPerPage');
$stmtss->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmtss->bindParam(':usersPerPage', $usersPerPage, PDO::PARAM_INT);
$stmtss->execute();
$users = $stmtss->fetchAll(); */

?>
<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tabla</title>
    <?= require_once "link.php"; ?>
    <!-- <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg">
    <link rel="icon" type="image/jpeg" sizes="100x100" href="../assets/img/pujol_manager/Avatar-logo-PM-100x100.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    <link rel="stylesheet" href="assets/css/Modal-Video-Plyrjs-Customized.css"> -->
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
<!--                     <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div> -->
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
                                            <div class="dropdown-list-imEdad me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-imEdad me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-imEdad me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-imEdad me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
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
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$nombre . ' ' . $apellido;?></span>
                                            <?php if(!empty($avatar)) { ?>
                                            <img class="border rounded-circle img-profile" src="data:image/jpeg;base64,<?=$avatar;?>">
                                            <?php }else{ echo '<img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar5.jpeg">'; } ?>
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Perfiles</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Configuaración</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Actividad</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="cerrar_sesion.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar Sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> -->
                

                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Tablero</h3>                  
                    <h6 class="text-dark mb-4"><?php require_once "fecha_dia_hora.php";?></h6>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright text-dark"><span><strong>Copyright © JeffCompanyApp <?php echo date('Y')?></strong></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div id="modal-edit-users" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-users me-3"></i>Modal Editar Usuarios</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body sys-box-course-modal">
                <div id="player" class="plyr__video-embed">
                    <section class="position-relative py-4 py-xl-5">
                        <div class="container position-relative">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                    <div class="card mb-5">
                                        <div class="card-body p-sm-5">
                                            <h2 class="text-center mb-4">Editar Usuario</h2>
                                            <form method="post">
                                                <div class="mb-3"><input id="id" class="form-control form-control-lg" type="hidden" name="id" placeholder="ID..."></div>
                                                <div class="mb-3"><input id="edad" class="form-control form-control-lg" type="hidden" name="edad" placeholder="Edad..."></div>
                                                <div class="mb-3"><input id="name-2" class="form-control form-control-lg" type="text" name="name" placeholder="Nombre" /></div>
                                                <div class="mb-3"><input id="apellido-2" class="form-control form-control-lg" type="text" name="apellido" placeholder="Apellido" /></div>
                                                <div class="mb-3"><input id="email-2" class="form-control form-control-lg" type="text" name="Correo" placeholder="Correo" />
                                                <div class="mb-3"><input id="passw" class="form-control form-control-lg" type="text" name="passw" placeholder="passw">
                                                <!-- <div class="mb-3"><input id="passw-2" class="form-control form-control-lg" type="text" name="passw-2" placeholder="passw"> -->
                                                    <!-- <div class="mb-3"><input id="name-2" class="form-control form-control-lg" type="text" name="edad" placeholder="Edad" /></div> -->
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-4">
                                                            <select class="form-select col-12 col-lg-3" id="select_area">
                                                                <optgroup label="Elige uno">
                                                                    <option value="0412" selected>(0412)</option>
                                                                    <option value="0414">(0414)</option>
                                                                    <option value="0424">(0424)</option>
                                                                    <option value="0416">(0416)</option>
                                                                    <option value="0426">(0426)</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-8">
                                                            <input id="telefono" class="form-control form-control-lg col-12 col-lg-9" type="text" name="telefono" placeholder="Telefono" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <select class="form-select" id="select_nivel">
                                                        <optgroup label="Seleccione el nivel de usuario">
                                                            <option value="1" selected>Cliente</option>
                                                            <option value="2">Recaudador</option>
                                                            <option value="3">Talento</option>
                                                            <option value="4">Adminstrador</option>
                                                            <option value="5">Master</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div><button id="btn_edit" class="btn btn-primary d-block w-100" type="button">Editar</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Registro Usuarios -->
<div id="modal-reg-user" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-user-plus me-3"></i>Modal Registro de usuarios</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
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
                                    <h1 id="label_reg">Perfil</h1>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Nombre</label><input id="reg_nomb" class="form-control" type="text" name="reg_nomb" /></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Apellido</label><input id="reg_apell" class="form-control" type="text" name="reg_apell" /></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Contraseña</label><input id="reg_clv" class="form-control" type="password" name="reg_clv" autocomplete="off" required /></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Email</label><input id="reg_email" class="form-control" type="email" autocomplete="off" required name="reg_email" /></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Codigo Area</label><select id="reg_area" name="reg_area" class="js-example-placeholder-single mb-3 w-100 form-control">
                                                    <option value="0412">0412</option>
                                                    <option value="0414">0414</option>
                                                    <option value="0424">0424</option>
                                                    <option value="0416">0416</option>
                                                    <option value="0426">0426</option>
                                                </select></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Telefono</label><input id="reg_tlfn" class="form-control" type="text" autocomplete="off" required name="reg_tlfn" /></div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group mb-3"><label id="label_reg" class="form-label">Roles</label><select id="reg_rol" name="reg_rol" class="js-example-placeholder-single mb-3 w-100 form-control">
                                                    <option value="1">Cliente</option>
                                                    <option value="2">Talento</option>
                                                    <option value="3">Reclutador</option>
                                                    <option value="4">Administrador</option>
                                                    <option value="5">Master</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="button" id="btn_registrar_users">GUARDAR</button><button class="btn btn-danger form-btn" type="reset">CANCELAR</button></div>
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
<!-- Fin Modal Registro Usuarios -->
<?php require_once "script.php"; ?>
<!--     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/select2-anchor.min.js"></script>
    <script src="assets/js/select2-placeholders.js"></script>
    <script src="assets/js/select2-placeholders.jquery.min.js"></script>
    <script src="assets/js/select2-prettify.min.js"></script>
    <script src="assets/js/select2-select2.full.js"></script>
    <script src="assets/js/select2-zcontent.js"></script>
    <script src="assets/js/jquery.min.js"></script>     -->
    <script>
        $(document).ready(function(){
            $("#tabla-1").show();
            $("#tabla-2").hide();
            $("#tabla-3").hide();
            $("#tabla-4").hide();

            $("#tEmpleados").click(function (){
                $("#tabla-1").show();
                $("#tabla-2").hide();
                $("#tabla-3").hide();
                $("#tabla-4").hide();
            })

            $("#tServicios").click(function (){
                $("#tabla-1").hide();
                $("#tabla-2").show();
                $("#tabla-3").hide();
                $("#tabla-4").hide();
            })

            $("#tTalentos").click(function (){
                $("#tabla-1").hide();
                $("#tabla-2").hide();
                $("#tabla-3").show();
                $("#tabla-4").hide();
            })

            $("#tUsuarios").click(function(){
                $("#tabla-1").hide();
                $("#tabla-2").hide();
                $("#tabla-3").hide();
                $("#tabla-4").show();
            })

        })

/*         document.addEventListener("DOMContentLoaded", function(){
            document.getElementById("btn_editar").addEventListener("click", function(){
                const idUser = this.value;
                console.log(idUser);
                fetch('../funciones/editar.php?id='+idUser)
                .then(response => response.json())
                .then(data => {
                    document.getElementById("name-2").value = data.nombre;
                    document.getElementById("apellido-2").value = data.apellido;
                    document.getElementById("email-2").value = data.email;
                    document.getElementById("passw").value = data.cont;
                    document.getElementById("").value = data.nombre;
                    document.getElementById("").value = data.nombre;

                })
                .catch(error => console.error("Error:", error));
            });
        }); */

        /* document.addEventListener("DOMContentLoaded", function() {
            const btnEdit = document.getElementById("btn_editar");
            btnEdit.addEventListener("click", function(){
                const idUser = this.value;
                console.log(idUser)
            })
        }) */

/*         let boton = document.getElementById("btn_editar");
        let attr =  */

        $(document).ready(function(){
            $(document).on('click', '#btn_editar', function(){
                let attr_name = $(this).attr('name')
                console.log(attr_name)
                $.ajax({ 
                    //url: 'localhost/pujol_manager/funciones/editar.php',
                    url: 'funciones/editar.php',
                    method: 'GET',
                    data:{ id: attr_name },
                    success: function(datos){
                        //let datos = JSON.parse(response)
                        console.log(datos.id)
                        console.log(datos.nombre)
                        console.log(datos.apellido)
                        console.log(datos.area +'-'+datos.tlfn)
                        console.log(datos.edad)
                        console.log(datos.cont)
                        console.log(datos.conf)
                        console.log(datos.nivel)
                        $("#id").val(datos.id)
                        $('#name-2').val(datos.nombre)
                        $('#apellido-2').val(datos.apellido)
                        $('#email-2').val(datos.email)
                        $("#passw").val(datos.conf)
                        $('#select_area').val(datos.area)
                        $('#telefono').val(datos.tlfn)
                        $("#edad").val(datos.edad)
                        $('#select_nivel').val(datos.nivel)
                        //$('#passw-2').val(datos.cont)
                    }
                }) 
                /* .done(function(response){
                    console.log(response.id)
                    console.log(response.nombre)
                    console.log(response.apellido)
                    console.log(response.area +'-'+response.tlfn)
                    console.log(response.edad)
                    console.log(response.cont)
                    console.log(response.conf)
                    console.log(response.nivel)
                    $("#id").val(response.id)
                    $('#name-2').val(response.nombre)
                    $('#apellido-2').val(response.apellido)
                    $('#email-2').val(response.email)
                    $('#select_area').val(response.area)
                    $('#telefono').val(response.tlfn)
                    $("#edad").val(response.edad)
                    $("#passw").val(response.conf)
                    $('#select_nivel').val(response.nivel)
                }) */
                //.error()
             })            
        })

        $(document).ready(function(){
            $('#btn_edit').on('click', function(){
                let id = $('#id').val()
                let nombre = $('#name-2').val()
                let apellido = $('#apellido-2').val()
                let email = $('#email-2').val()
                let area = $('#select_area').val()
                let telefono = $('#telefono').val()
                let edad = $('#edad').val()
                let contrasena = $('#passw').val()
                let nivel = $('#select_nivel').val()
                console.log(id + ' ' + nombre + ' ' + apellido + ' ' + email + ' ' + area + ' ' + telefono + ' ' + edad + ' ' + contrasena + ' ' + nivel )
                $.ajax({
                    url: 'funciones/actualizar.php',
                    method: 'POST',
                    data: { id, nombre, apellido, email, area, telefono, edad, contrasena, nivel }
                })
                .done(function(done){
                    let json = JSON.parse(done)
                    if(json.status == 'Correcto')
                    {
                        alert(json.Mensaje)
                        console.log(json.Mensaje)
                        console.log(json.id)
                        console.log(json.nombre)
                        console.log(json.hash)
                        $('#modal-edit-users').modal('hide')
                        location.reload();
                    }
                })
            })
        })

        $(document).ready(function(){
            $(document).on('click', '#btn_excel', function(){
                $.ajax({
                    url: 'excel.php',
                    method: 'POST',
                    data: {},
                    success: function(data){
                        //console.log("Exito!!!")
                        console.log(data)
                        alert('Por favor revisa el disco local C en la carpeta para excel');
                    }
                })
            })
        })

        $(document).ready(function(){
            $(document).on('click', '#btn_pdf', function(){
                $.ajax({
                    url: 'pdf_html.php',
                    method: 'POST',
                    data: {},
                    success: function(done){
                        console.log(done)
                        alert('Pdf Generado Exitosamente!!!')

                    }
                })
            })
        })

        $(document).ready(function(){
            //$("#alert-message").hide()
            $(document).on('click', '#btn_registrar_users', function(){
                let reg_nomb = $("#reg_nomb").val()
                let reg_apell = $("#reg_apell").val()
                let reg_clv = $("#reg_clv").val()
                let reg_email = $("#reg_email").val()
                let reg_area = $("#reg_area").val()
                let reg_tlfn = $("#reg_tlfn").val()
                let reg_rol = $("#reg_rol").val()
                console.log($("#form_reg_users").serialize())
                //let form = $("#form_reg_users").serialize()
                if(reg_nomb.length == '' || reg_apell.length == '' || reg_clv.length == '' || reg_email.length == '' || reg_area.length == '' || reg_tlfn.length == '' || reg_rol.length == '')
                {
                    $("#alert-message").html(
                        `
                            <div class="col-md-12 alert-col relative">
                                <div class="alert alert-danger alert-dismissible absolue center" role="alert"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button><span id="span_mensaje">Ningun Campo debe quedar vacio</span></div>
                            </div> 
                        `
                    )
                
            }else
            {
                $.ajax({
                    url: 'registro_usuarios.php',
                    method: 'POST',
                    data: { reg_nomb, reg_apell, reg_clv, reg_email, reg_area, reg_tlfn, reg_rol },
                    success: function(json){
                        //let json = JSON.parse(success)
                        console.log(json.id)
                        console.log(json.nombre)
                        console.log(json.apellido)
                        console.log(json.correo)
                        console.log(json.telefono)
                        console.log(json.rol)
                        console.log(json.mensaje)
//                        $("#alert-message").show()  
                        $("#alert-message").html(json.alert)
                        /* $.each(json, function(index, item){
                            $("#tabla-4 tbody").append(`
                                <tr>
                                    <td>${item.id}<td>
                                    <td>${item.nombre}<td>
                                    <td>${item.apellido}<td>
                                    <td>${item.correo}<td>
                                    <td>${item.area}${item.telefono}<td>
                                    <td>${item.rol}<td>
                                </tr>
                            `)
                        }) */
                        $("#tabla-4 tbody").html(json.tabla)
                        $("#form_reg_users")[0].reset()
                        setTimeout(function(){
                            console.log("Detenido por 5 segundos")
                        }, 5000)
                        //location.reload();
                    },
                    error: function(xhr, textStatus, errorThrown){
                    console.log(xhr)
                    console.log(textStatus)
                    console.log(errorThrown)
                }
                })
            }
                /* .done(function(success){
                    console.log(success.id)
                    
                }) */
                /* .error(function(xhr, textStatus, errorThrown){
                    console.log(xhr)
                    console.log(textStatus)
                    console.log(errorThrown)
                }) */
            })
        })

    </script>
</body>

</html>