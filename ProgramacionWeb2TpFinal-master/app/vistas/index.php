<?php
require_once '../config/Conexion.php';
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<?php include('head.php'); ?>
<body>
<?php include('header.php'); ?>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Bienvenido!</h3>
                            
                            <form   action='../config/validarSesion.php' method='POST' ENCTYPE="application/x-www-form-urlencoded">
                                 <div class="form-group">
                                 <label for="Usuario">Usuario</label>
                                    <input type="text" class="form-control" name="usuario"  placeholder="Ingrese usuario">
                                     </div>
                                    <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>
