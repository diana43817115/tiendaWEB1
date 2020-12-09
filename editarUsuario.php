<?php
include("baseDatos.php");

//1. crear el objeto de la Base de datos
$transaccion= new baseDatos();

//2. Recibir datos
if(isset($_POST["botonEditar"])){

//3. Recibir el id que quiero editar
$id=$_GET["id"];
$nombre=$_POST['nombreEditar'];
$descripcion=$_POST['descEditar'];

//4. consulta para editar un registro
$consultaSQL="UPDATE productos SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

//5. Utilizar el metodo editar
$transaccion->editarDatos($consultaSQL);

//Redireccion

header("location:index.php");

}







?>