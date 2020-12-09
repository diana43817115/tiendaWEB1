<?php

   include('baseDatos.php');

   //2.recibir datos
  if(isset($_POST["botonEnvio"])){

   //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $foto=$_POST['foto'];

    //1.copia u objeto de la clase BD
    $transaccion=new baseDatos();

    //crear consulta
    $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";

   //llamo al metodo de la clase BD agregardatos()
   $transaccion->agregarDatos($consultaSQL);   }

   header("location:index.php");

?>


























