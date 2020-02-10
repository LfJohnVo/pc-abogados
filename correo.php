<?php
$nombre = $_POST['name'];
$mensaje = $_POST['message'];
$email = $_POST['email'];


$to = ' contacto@abogadopenal.mx'; // aqui coloca el email de quien recibira el correo
$from_email = 'test@hostinger-tutorials.com'; // $_POST[email]
$subject = 'Correo recibido desde la web de Abogados Penalistas';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: $from_email" . "\r\n" .
    "Reply-To: $from_email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
$message = '<body><h1>Abogados Penalistas</h1><p>Este es un <strong> mensaje recibido desde la web.</strong>.</p>
<p>Nombre: ' . $nombre . '</p>
<p>Mensaje: ' . $mensaje . '</p>
<p>Mensaje enviado desde el correo: ' . $email . '</p>
<p></a></p></body>';
mail($to, $subject, $message, $headers);

?>
<script type="text/javascript">
    alert("Mensaje enviado!");
    location.href = "index";
</script>
