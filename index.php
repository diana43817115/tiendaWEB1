<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
    </header>
    <main>

    <!-- Example split danger button -->
<div class="btn-group">

  <button type="button" class="btn btn-danger" Lista de Productos style="BORDER: rgb(128,128,128) 1px solid; FONT-SIZE: 12pt; FONT-FAMILY: Verdana; 
         BACKGROUND-COLOR: rgb(233,233,233)">   
  <a href="listaUsuarios.php" target="_blank">CLICK AQUI PARA IR A LISTA DE PRODUCTOS</a>
  </button>  
 
  
</div>


        <div class="container">
            <form action="registrarUsuarios.php" method="POST">
            <br>
            <br>
            <br>
                <h1>ADMINISTRACION DE PRODUCTOS</h1>
                <br>
                <br> 
                <br>               
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del producto :" name="nombre">
                        
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca del producto :" name="marca">
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio del producto :" name="precio">
                    </div>
                </div>

                <div class="row mt-3">                                  
                    <div class="col">
                    <br>
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>  

                <div class="row mt-3">                                  
                    <div class="col">
                    <br>
                        <label class="font-weight-bold">Fotografia:</label>
                        <input type="text" class="form-control" placeholder="URL FOTOGRAFIA :" name="foto">                        
                    </div>
                </div> 
                        <br>
                        <br>             

                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>

            </form>
        </div>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>

