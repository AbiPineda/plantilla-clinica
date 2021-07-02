<?php
include_once '../pantalla/cabecera.php';
include_once '../pantalla/menu_izquierda.php';
include_once '../pantalla/menu.php';
include_once '../Conexion/conexion.php';



?>
<div class="header pb-6 d-flex align-items-center">

</div>
<div><br></div>
<div class="container-fluid mt--6">
    <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Registrar Paciente </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" id="f1" name="f1" method="post" class="form-register">
                        <input type="hidden" name="tirar" id="pase" />
                        <h6 class="heading-small text-muted mb-4">Información General</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nombres</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Apellidos</label>
                                        <input type="text" id="apellido" name="apellido" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Dirección</label>
                                        <input id="direccion" name="direccion" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </input>
                    </form>
                    <div class="text-right">

                        <button type="submit" name="btnEnviar" id="su" class="btn btn-sm btn-primary">Guardar</button>
                        <button type="reset" name="btnCancelar" id="botonCancelar"
                            class="btn btn-sm btn-danger">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
  if (isset($_REQUEST['tirar'])) {

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    

    mysqli_query($conexion, "INSERT INTO paciente(nombre_paciente,apellidos_paciente) VALUES('$nombre','$apellido')");
        echo '<script>swal({
                    title: "Registro",
                    text: "Guardado!",
                    type: "success",
                    confirmButtonText: "Aceptar",
                    closeOnConfirm: false
                },
                function () {
                    location.href="registroPaciente.php";
                    
                });</script>';

    }
   
  
          
include_once '../pantalla/pie_pantalla.php';
?>