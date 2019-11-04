<?php
$saludo="hola";
function mayuscula($dato){
  return strtoupper($dato);

}

echo mayuscula('asd');

function incrementar($numero){

  return ++$numero;
}
echo incrementar(1)+1;

echo $_GET['id'];


function numero(){
return [1,2,3,4,5,6,7,8,9];
}
echo numero()[5];

 ?>
