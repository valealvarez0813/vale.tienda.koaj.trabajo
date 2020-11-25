<?php 

//Cajoneras o arreglos donde los cajones o elementos tienen nombres asignados por numeros
//ARREGLOS INDEXADOS
$productos=array("camisa mujer","camisa mujer2","camiseta hombre","camiseta hombre2","buzo hombre","buzo hombre2","buzo mujer","buzo mujer2","tennis mujer","tennis hombre");
print_r($productos);
echo("<br>");
echo($productos[0]);

//ARREGLOS ASOCIATIVOS
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"camisa mujer","producto2"=>"camisa mujer2","producto3"=>"camiseta hombre","producto4"=>"camiseta hombre2","producto5"=>"buzo hombre","producto6"=>"buzo hombre2","producto7"=>"buzo mujer","producto8"=>"buzo mujer2","producto9"=>"tennis mujer","producto10"=>"tennis hombre");

print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto1"]);

//CICLO FOREACH
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){

    echo($clave.": ".$valor);
    echo("<br>");
  

}


?>