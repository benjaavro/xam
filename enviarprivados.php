<?php
    
    $destinatario    = "benjaavro@gmail.com, xtremeadventure@hotmail.com, contacto@xtremeadventuremx.com";
//  xtremeadventure@hotmail.com
    $nombre     = $_POST["nombre"];
    $mail       = $_POST["mail"];
    $telefono   = $_POST["tel"];
    $origen     = $_POST["origen"];
    $destino    = $_POST["destino"];
    $tipo       = $_POST["tipo"];
    $fsalida    = $_POST["fsalida"];
    $hsalida    = $_POST["hsalida"];
    $fregreso   = $_POST["fregreso"];
    $hregreso   = $_POST["hregreso"];
    $personas   = $_POST["personas"];
    $mensaje    = $_POST["mensaje"];

    $datoscontacto  = "Nombre: " . $nombre . "\nCorreo: " . $mail . "\nTelefono: " . $telefono;

    $datosviaje     = "\nLugar de Origen del viaje: " . $origen . "\nLugar de Destino del viaje: " . $destino . "\nFecha de salida del viaje: " . $fsalida . "\nHora de salida del viaje: " . $hsalida . "\nFecha de regreso del viaje: " . $fregreso . "\nHora de regreso del viaje: " . $hregreso . "\nNumero de personas: " . $personas;

    $contenido = $datoscontacto . $datosviaje . "\n\nMensaje : \n" . $mensaje;

    mail($destinatario,"Mensaje de contacto enviado desde cotizador de tours",$contenido);

    header("Location:gracias.html");    
?>