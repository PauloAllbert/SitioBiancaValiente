<?php

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  // Si quieren un asunto personalizado
  //$asunto_input = $_POST['asunto'];

  $cuerpo = 'Remitente:' . $nombre . '<br>';
  $cuerpo .= 'Email: ' . $email . '<br>';
  $cuerpo .= 'Mensaje: ' . $mensaje;

  $destino = 'paullofds@gmail.com';
  $asunto = 'Sitio Jungle Banda';
  // Si quieren un asunto personalizado
  //$asunto = $asunto_input;

  $encabezados = 'MIME-Version: 1.0' . "\r\n";
  $encabezados .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
  $encabezados .= 'From: ' . $nombre . '<' . $email . '>' . "\r\n";

  if(mail( $destino, $asunto, $cuerpo, $encabezados )){
    header("Location: gracias.html");
  } else {
    header("Location: error.html");
  }

?>