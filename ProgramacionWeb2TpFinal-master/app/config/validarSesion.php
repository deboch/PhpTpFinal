<h1>HOLA</h1>
<?php
        require_once 'conexion.php';

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $passEnc = $password;

        $consulta = "SELECT * from usuario where usuario='$usuario'";
        //        ejecuto la consulta en la conexion
        $result = mysqli_query($conexion,$consulta);

//        Busca en el resultado de usuario la password y la compara contra la ingresada en el index
if($row = mysqli_fetch_array($result)) {
    if ($row['pass'] == $passEnc) {
        session_start();
        header("Location:../vistas/vistaUsuario.php");
    }
}

$_SESSION['id'] = $row['id'];

?>