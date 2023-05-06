<?php 

//Bloque de las Variables
$nombres=$_POST['nombres'];

$calle=$_POST['calle'];

$usu=$_POST['usu'];

$mensaje=$_POST['mensaje'];


// Configuramos datos de email
$destinatario="mimail@hotmail.com";

$asunto="Mensaje desde mi sitio";


// Cuerpo de email

$cuerpo.="Nombres: ".$nombres."\n";

$cuerpo.="Domicilio: ".$calle."\n";

$cuerpo.="Usuario: ".$usu."\n\n";

$cuerpo.="Comentario: ".$mensaje."\n";


// enviamos el formulario

mail($destinatario,$asunto,$cuerpo);

echo $nombres, ", gracias por contactarnos!!!";		

?>