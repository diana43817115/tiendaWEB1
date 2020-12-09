<?php
include("baseDatos.php");

//1. Recibo el id que voy a eliminar por la URL(GET)

$idEliminar=($_GET["id"]);

//2. crear el objeto de la clase baseDatos
$transaccion= new baseDatos();

//3.crear la consulta squl para eliminar
$consultaSQL="DELETE FROM productos WHERE idUsuario='$idEliminar'";

//4.utilizar el metodo para eliminar datos
$transaccion->eliminarDatos($consultaSQL);

header("location:index.php");


?>