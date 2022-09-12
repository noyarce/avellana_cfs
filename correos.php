
<?php



    $destinatario = 'avellanacoffee.store@gmail.com'; //correo destinatario


    $nombre = $_POST['nombre'];
    $asunto = "consulta Avella Coffee Store";
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];


    $header = "Enviado desde la Página de Avella Coffee Store";

    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;



    mail($destinatario,$asunto,$mensajeCompleto , $header);
    echo"<script>alert('correo enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='index.php'\",1000)</script>";


?>



<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";


$message = "Este mensaje fue enviado por: $nombre " . $name . " \r\n";
$message .= "Su e-mail es: $email " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'avellanacoffee.store@gmail.com';
$asunto = 'consulta Avella Coffee Store';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.php");
?>