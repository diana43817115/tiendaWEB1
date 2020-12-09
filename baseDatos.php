<?php

class baseDatos{
    //atributos
    public $usuarioBD="root";
    public $passwordBD="";

    //constructor
    public function __construct(){}
    
  //metodos
    public function conectarBD(){ 
        try{

           $datosBD="mysql:host=localhost;dbname=tiendaropa";    
           $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
           //echo("exito");
           return($conexionBD);

        }catch(PDOException $error){
            echo($error->getMessage());
        }        
    } 
    
     public function agregarDatos($consultaSQL){    

         //establecer una conexion
         $conexionBD=$this->conectarBD();     

        //preparar consulta
        $insertarDatos=$conexionBD->prepare($consultaSQL);       

        //ejecutar la consulta
        $resultado=$insertarDatos->execute();        

         //Verifico el resultado
       
    }

    public function consultarDatos($consultaSQL){
          //establecer una conexion
          $conexionBD=$this->conectarBD();  

          //preparar consulta
        $consultarDatos=$conexionBD->prepare($consultaSQL); 

        //establecer el metodo de consulta
        $consultarDatos->setFetchmode(PDO::FETCH_ASSOC);

        //Ejecutar la operacion en la base de datos
        $consultarDatos->execute();

        //Retorne los datos consultados
        return($consultarDatos->fetchAll());

        
    }
     
    public function  eliminarDatos($consultaSQL){
       //establecer una conexion
       $conexionBD=$this->conectarBD();  
       
       //preparar consulta
       $eliminarDatos=$conexionBD->prepare($consultaSQL);

        //ejecutar la consulta
        $resultado=$eliminarDatos->execute(); 

          //Verifico el resultado
          //if($resultado){     
           // echo("Usuario eliminado");         
         //}else{    
           //  echo("Error");  
         //} 
    }

    public function editarDatos($consultaSQL){
        //establecer una conexion
       $conexionBD=$this->conectarBD();  
       
       //preparar consulta
       $editarDatos=$conexionBD->prepare($consultaSQL);

        //ejecutar la consulta
        $resultado=$editarDatos->execute(); 

          //Verifico el resultado
          //if($resultado){     
           // echo("Usuario editado");         
         //}else{    
           //  echo("Error");  
         //} 
    }

    }    

?>

























