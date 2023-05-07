<?php 

//Bloque de las Variables
$nombres=$_POST['nombres'];

$calle=$_POST['calle'];

$usu=$_POST['usu'];

$correo=$_POST['correo'];

$clave=$_POST['clave'];

$edad=$_POST['edad'];

$telefono=$_POST['telefono'];

$mensaje=$_POST['mensaje'];



// Configuramos datos de email
$destinatario="jorge.gesp@hotmail.com";

$asunto= "consulta web desde mi sitio";


// Cuerpo de email

$cuerpo.="Nombres: ".$nombres."\n";

$cuerpo.="Domicilio: ".$calle."\n";

$cuerpo.="Alias: ".$usu."\n\n";

$cuerpo.="Correo: ".$correo."\n";

$cuerpo.="Clave: ".$clave."\n";

$cuerpo.="Edad: ".$edad."\n";

$cuerpo.="Telefono: ".$telefono."\n";

$cuerpo.="Comentario: ".$mensaje."\n";


// enviamos el email o formulario

mail($destinatario,$asunto,$cuerpo);

echo $nombres, ", gracias por contactarnos!!!";		

?>