<?php
    
    $destinatario    = "benjaavro@gmail.com, xtremeadventure@hotmail.com, contacto@xtremeadventuremx.com";
//  xtremeadventure@hotmail.com
    $nombre         = $_POST["nombre"];
    $mail           = $_POST["mail"];
    $telefono       = $_POST["tel"];
    $capacidad      = $_POST["capacidad"];
    $origen         = $_POST["origen"];
    $destino        = $_POST["destino"];
    $fecha_salida   = $_POST["fecha_salida"];
    $hora_salida    = $_POST["hora_salida"];
    $fecha_regreso  = $_POST["fecha_regreso"];
    $hora_regreso   = $_POST["hora_regreso"];
    $mensaje        = $_POST["mensaje"];

    $datoscontacto  = "Nombre: " . $nombre . "\nCorreo: " . $mail . "\nTelefono: " . $telefono;

    $datosviaje     = "\nLugar de Origen del viaje: " . $origen . "\nLugar de Destino del viaje: " . $destino . "\nFecha de salida del viaje: " . $fecha_salida . "\nHora de salida del viaje: " . $hora_salida . "\nFecha de regreso del viaje: " . $fecha_regreso . "\nHora de regreso del viaje: " . $hora_regreso . "\nCapacidad del transporte: " . $capacidad;

    $contenido = $datoscontacto . $datosviaje . "\n\nMensaje : \n" . $mensaje;

    mail($destinatario,"Mensaje de contacto enviado desde cotizador de transportes",$contenido);

    header("Location:gracias.html");    
?>