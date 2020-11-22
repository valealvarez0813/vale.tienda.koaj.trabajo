<?php 

//arreglo 1 dimension


$precios=array(199000,239000,399000,999000);
$nombres=array("camisa","camiseta","buzo","tennis");
$coleccion=array("nasa","koaj fit","young","nasa");


//arreglo multidimensional


$productos=array(
    
    array("camisa",199000,"nasa"),
    array("camiseta",239000,"koaj fit"),
    array("buzo",399000,"young"),
    array("tennis",999000,"nasa")
);

//Abrir cada cajon del arreglo y sacare los elementos de ese cajon:
foreach($productos as $producto){

    
    echo($producto[0]);
    echo("<br>");


}








?>