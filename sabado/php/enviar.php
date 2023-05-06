<?php 

//Bloque de las Variables
$nya=$_POST['nya'];

$calle=$_POST['calle'];

$phone=$_POST['phone'];

$clave=$_POST['clave'];

$mensaje=$_POST['mensaje'];


// Configuramos datos de email
$destinatario="mimail@hotmail.com";

$asunto= "Nuevo Postulante";


// Cuerpo de email

$cuerpo.="Nombres: ".$nya."\n";

$cuerpo.="Domicilio: ".$calle."\n";

$cuerpo.="Teléfono: ".$phone."\n";

$cuerpo.="Contraseña: ".$clave."\n\n";

$cuerpo.="Comentario: ".$mensaje."\n";


// enviamos el email

mail($destinatario,$asunto,$cuerpo);

echo $nombre, "Gracias por contactarnos!!!";		

?>