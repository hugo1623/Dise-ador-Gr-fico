<?php
$para = 'hugoluis@gmail.com';
$asunto='Mensaje desde pelissluis.webcindario.com';
$mailheader = "From:" .$_POST["email"]."\r\n";
$mailheader .= "Reply-To:" .$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAG_BODY = "Nombre:" .$_POST["name"]."\n";
$MESSAG_BODY .= "\n<br>Email:" .$_POST["email"]."\n";
$MESSAG_BODY .= "\n<br>Mensaje:" .nl2br($_POST["message"])."\n";


mail($para, $asunto, $MESSAG_BODY, $mailheader) or die("Error al enviar email!");
header('Location: http://pelissluis.webcindario.com/luis')

?>