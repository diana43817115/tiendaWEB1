<?php

   include('baseDatos.php');

   //2.recibir datos
  if(isset($_POST["botonEnvio"])){

   //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];

    //1.copia u objeto de la clase BD
    $transaccion=new baseDatos();

    //crear consulta
    $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion) VALUES ('$nombre','$marca','$precio','$descripcion')";

   //llamo al metodo de la clase BD agregardatos()
   $transaccion->agregarDatos($consultaSQL);   }

?>


























