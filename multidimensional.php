<?php 

//arreglo 1 dimension


$precios=array(199000,239000,399000,999000);
$nombres=array("camisa","camiseta","buzo","tennis");
$coleccion=array("nasa","koaj fit","young","nasa");


//arreglo multidimensional


$productos=array(
    
    array("camisa mujer",199000,"nasa"),
    array("camisa mujer2",199000,"nasa"),
    array("camiseta hombre",239000,"koaj fit"),
    array("camiseta hombre2",239000,"koaj fit"),
    array("buzo  mujer",399000,"young"),
    array("buzo  mujer2",399000,"young"),
    array("buzo  hombre",499000,"young"),
    array("buzo  hombre2",499000,"young"),
    array("tennis mujer",999000,"nasa")
    array("tennis hombre",999000,"nasa")
);

//Abrir cada cajon del arreglo y sacare los elementos de ese cajon:
foreach($productos as $producto){

    
    echo($producto[0]);
    echo("<br>");


}








?>