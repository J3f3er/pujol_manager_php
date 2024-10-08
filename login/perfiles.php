<?php
require_once "verificacion.php";
//require_once "foto_perfil.php";
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Perfiles Usuaurios</title>
    <?php require_once "link.php"; ?>

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <!-- <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
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
                    <!-- <li class="nav-item"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="blank.html"><i class="fas fa-shopping-cart"></i><span>Blank Page</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.html"><i class="fas fa-window-maximize"></i><span>Servicios</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="index-1.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forgot-password.html"><i class="fas fa-key"></i><span>Forgotten Password</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="personalizar.html"><i class="fas fa-window-maximize"></i><span><strong>Personalizar</strong></span></a></li> -->
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?= $nombre . ' ' . $apellido ?></span><?php if($avatar){?><img class="border rounded-circle img-profile" src="data:image/jpeg;base64,<?=$avatar?>"><?php }else{ ?> <img class="border rounded-circle img-profile" src="./assets/img/dogs/image2.jpeg"> <?php } ?></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> -->
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Perfiles</h3>
                    <h6 class="text-dark mb-4"><?php require_once "fecha_dia_hora.php";?></h6>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Ajustes de Usuarios</p>
                                        </div>
                                        <div class="container">
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="profile-header-container">
                                                        <div class="profile-header-img text-center"><img class="img-circle" src="data:image/jpeg;base64,<?php echo $avatar; ?>" />
                                                            <div class="rank-label-container"><span class="label label-default rank-label">100 points</span></div>
                                                        </div>
                                                        </div><button class="btn btn-primary" type="button">Cambiar Foto</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="profile-header-container">
                                                        <label for="photo" class="col-12 text-center input-group-text" style="padding-left: 50%;">Foto de Perfil</label>
                                                        <div class="profile-header-img text-center"><img class="img-circle" src="data:image/jpeg;base64,<?php echo $avatar?>" width="268" height="168" />
                                                            <!-- <div class="rank-label-container"><span class="label label-default rank-label">100 points</span></div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center mt-3">
                                                        <button class="btn btn-primary" id="btn_c_foto" type="button">Cambiar Foto</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form class="fs-6 fw-bolder border rounded shadow ps-xl-3 pe-xl-3 pt-xl-3 pb-xl-3 ps-lg-2 pe-lg-2" id="form_update" data-bs-theme="light" data-bs-spy="scroll">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label text-dark" for="username"><strong>Nombre:</strong></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="height: 49px;"><i class="fa fa-user" style="font-size: 24px;"></i>
                                                                    </span>
                                                                </div>
                                                                    <input class="form-control form-control-lg text-dark" type="text" id="first_name" name="nombre" placeholder="Nombre..." value="<?=$nombre?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label class="form-label text-dark" for="username"><strong>Apellido:</strong></label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="height: 49px;"><i class="fa fa-user" style="font-size: 24px;"></i></span>
                                                                    </div>
                                                                        <input class="form-control form-control-lg text-dark" type="text" id="last_name" name="apellido" placeholder="Apellido......" value="<?=$apellido?>">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label text-dark" for="email"><strong>Dirección Email</strong></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" style="height: 49px;"><i class="fas fa-envelope" style="font-size: 24px;"></i></span></div><input class="form-control form-control-lg text-dark" type="text" id="email" name="email" value="<?=$email?>" placeholder="Dirección de Correo Electronico...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mb-3"><label class="form-label text-dark" for="first_name"><strong>Contraseña:</strong></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span id="togglecontrasena" class="input-group-text far fa-eye-slash" style="height: 48px;font-size: 24px;padding-top: 10px;padding-right: 12px;padding-left: 12px;"></span></div><input class="form-control form-control-lg text-dark" type="password" id="contrasena" name="password" value="<?=$fcon?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mb-3"><label class="form-label text-dark" for="first_name"><strong>Numero de Telefono:</strong></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend"><span class="input-group-text" style="height: 48px;"><i class="fas fa-phone" style="font-size: 24px;"></i></span></div><input class="form-control form-control-lg text-dark" type="tel" id="telefono" name="telefono" value="<?=$tlfn?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mb-3"><input class="form-control" type="hidden" id="last_id" placeholder="ID...." name="id" value="<?=$id?>"></div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mb-3"><input class="form-control" type="hidden" id="last_nivel" placeholder="Nivel" name="nivel" value="<?=$nivel?>"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-lg" type="submit">Guardar Configuración</button></div>
                                            </form>
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
                    <div class="text-center my-auto copyright text-dark"><span>Copyright © JeffCompanyApp <?php echo date('Y')?></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade sys-box-course-modal" role="dialog" tabindex="-1" id="modal_image_c">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-image me-3"></i>Actualizar Imagen:&nbsp;</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body sys-box-course-modal">
                    <div id="player" class="plyr__video-embed">
                        <div class="files color form-group mb-3"><input type="file" multiple="" name="files"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal actualizar foto -->
    <div id="modal_update_foto" class="modal fade sys-box-course-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-white"><i class="fas fa-upload me-3"></i>Actualizar Foto</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body sys-box-course-modal">
                    <div id="player_update_foto" class="plyr__video-embed">
                        <form id="form_foto">
                        <div class="files color form-group mb-3">
                            <input id="file_foto" class="border rounded btn btn-primary" type="file" multiple name="file_foto" />
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" class="form-control form-control-lg text-dark" name="pm_id" id="pm_id" value="<?=$id?>">
                                    <button id="btn_u_foto" class="btn btn-primary d-block icon-button w-100" type="submit"><i class="fas fa-upload"></i><span>Actualizar Foto</span></button></div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal actualizar foto -->
    
    <?php require_once "script.php"; ?>
    <script>
        function alertados(){
            setInterval(function(){
                console.log('actualizado con exito!!!')
                location.reload()
            }, 3000)
            alert('actualizado con exito!!!')
        }
        $(document).ready(function(){
            $('#togglecontrasena').on('click', function() {
                var $this = $(this)
                if ($this.hasClass('fa-eye-slash')) {
                    $this.removeClass('fa-eye-slash').addClass('fa-eye')
                    $('#contrasena').attr('type', 'text')
                } else {
                    $this.removeClass('fa-eye').addClass('fa-eye-slash')
                    $('#contrasena').attr('type', 'password')
                }
            })

            $('#form_update').on('submit', function(e){
                e.preventDefault()
                let id = $("#last_id").val()
                let nombre = $("#first_name").val()
                let apellido = $("#last_name").val()
                let email = $("#email").val()
                let telefono = $("#telefono").val()
                let contrasena = $("#contrasena").val()
                let nivel = $("#last_nivel").val()
                /* const url = $('#form_update').attr('action') */
                console.log(id + ' ' + nombre + ' ' + apellido + ' ' + email + ' ' + telefono + ' ' + contrasena + ' ' + nivel);
                $.ajax({
                    url: 'funciones/actualizar.php',
                    method: 'POST',
                    data:{ id, nombre, apellido, email, telefono, contrasena, nivel },
                    success: function(done){
                            const data = JSON.parse(done)
                            if(data.status = 'Correcto')
                            {
                                console.log(data.status)
                                console.log(data.Mensaje)
                                console.log(data.id)
                                console.log(data.nombre)
                                console.log(data.hash)
                                alert(data.Mensaje)
                                location.reload()
                                /* $("#last_id").val(data.id)
                                $("#first_name").val(data.nombre) */
                                /* $("#form_update")[0].reset() */
                                //location.reload();
                            }
                            else
                            {
                                console.log(data.status)
                                console.log(data.Mensaje)
                            }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.log('Error: ' + textStatus + ' - ' + errorThrown)
                    }
                })
                //alertados()
            })
        })
        $(document).ready(function(){
            $("#btn_c_foto").click(function(){
                $("#modal_update_foto").modal('show')
            })
            $("#btn_u_foto").click(function(j){
                j.preventDefault()
                    let formFoto = new FormData($("#form_foto")[0])
                    console.log(formFoto)
                    $.ajax({
                        url: 'perfiles/actualizar_foto.php',
                        method: 'POST',
                        data: formFoto ,
                        processData: false,
                        contentType: false,
                        success: function(exitoFoto){
                            console.log(exitoFoto)
                            alert(exitoFoto)
                            location.reload()
                        },
                        error: function(xhr, textStatus, errorThrown){
                            console.error(xhr)
                            console.error(textStatus)
                            console.error(errorThrown)
                        }
                    })
            })
        })
    </script>
</body>

</html>

