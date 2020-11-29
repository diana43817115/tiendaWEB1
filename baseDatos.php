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
           echo("exito");
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
        if($resultado){     
           echo("Usuario agregado");         
        }else{    
            echo("Error");  
        } 
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
    }    

?>

























