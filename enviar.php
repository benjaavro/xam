<?php

    $destino    = "benjaavro@gmail.com, xtremeadventure@hotmail.com, contacto@xtremeadventuremx.com";
//  xtremeadventure@hotmail.com
    $nombre     = $_POST["nombre"];
    $mail       = $_POST["mail"];
    $telefono   = $_POST["tel"];
    $viaje      = $_POST["viaje"];
    $personas   = $_POST["personas"];
    $mensaje    = $_POST["mensaje"];

    $contenido  = "Nombre: " . $nombre . "\nCorreo: " . $mail . "\nTelefono: " . $telefono . "\nViaje de Interés: " . $viaje . "\nNumero de personas: " . $personas . "\nMensaje: " . $mensaje;

    mail($destino,"Mensaje de contacto enviado desde página web",$contenido);

    header("Location:gracias.html");    
?>