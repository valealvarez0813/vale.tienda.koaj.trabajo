<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $nombreproducto=$_POST["nombreproducto"];
    $talla=$_POST["talla"];
    $color=$_POST[" color"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    
    //2. crear un objeto(copia) de la clase BaseDatos()
    $operacionBD= new BaseDatos();
   

    //3.Necesito crear una consulta SQL para insertar datos
    $consultaSQL="INSERT INTO usuarios(nombreproducto,talla,color,descripcion,foto) VALUES ('$nombreproducto','$talla','$color','$descripcion','$foto')";

    //4. LLamar al metodo agregarDatos() de la clase BaseDatos
    $operacionBD->agregarDatos($consultaSQL);



    

}




?>