<?php 

//Incluir el archivo donde esta mi clase
include("Ropa.php");

//Tengo que sacar la copia (Instancia de la clase)
//Crear un Objeto
$productos= new Ropa();


//Acceder a un atributo
$productos->cantidaddecoleccion="2000 productos de cana categoria";
echo($productos->cantidaddecoleccion);


//Accder a un metodo
$productos->cantidad();





?>