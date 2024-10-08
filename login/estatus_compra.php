<?php
require_once "verificacion.php";
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
                    <h3 class="text-dark mb-4">Estado de la Compra</h3>
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
                            <!-- Contenido -->
                            <div>
                            <div class="container" id="container">
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-start">Detalle del Pedido<br /><br /></h2>
                                    </div>
                                </div> -->
<!--                                 <div class="row">
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
                                </div> -->
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <p><br /><br />N.º pedido   :       508250005050451<br />Fecha           :        30-05-2019<br />Estado          :        Realizar Pedido<br /><br /></p>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <!-- <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Detalle de Productos</h2>
                                        <div class="gift row">
                                            <div class="gift__img col-sm-3 col-12"><img src="mil_hojas_web_2000x.jpg" />
                                                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
                                            </div>
                                            <div class="gift__info col-sm-9 col-12">
                                                <h4 class="gift__name">Torta Mil Hojas Manjar<br /></h4>
                                                <div class="gift__details">
                                                    <p><br />Clásica torta de mil hojas, rellena con manjar casero y <br />huevo moll con almendras.<br /><br /></p>
                                                </div>
                                                <div class="gift__bottom row">
                                                    <div class="gift__price-wrap col-12 col-sm-6">
                                                        <div class="gift__normal-price"></div>
                                                        <div class="gift__today-price"></div>
                                                        <h3 class="gift__name">Precio: $22.500</h3>
                                                    </div>
                                                    <div class="gift__cta-wrap col-12 col-sm-6"><a class="flux_cta gift__cta" target="_blank" href="#" style="background-color: #ff8000;">Danos tu Opinion   <i class="far fa-comments"></i></a><span class="gift__cta-note">34 ya dejaron un comentario </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                            <!-- Fin Del Contenido -->
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
                            //location.reload()
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

