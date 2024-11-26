<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];

    // Destinatario del correo
    $to = "agustinavictoriamendoza95@gmail.com"; // Reemplaza con tu correo electrónico
    $subject = "Nuevo Producto Agregado al Carrito";
    $message = "Producto: $producto\nPrecio: $precio";

    // Cabeceras del correo
    $headers = "From: tienda@ropabrunck.com";

    // Enviar correo
    if (mail($to, $subject, $message, $headers)) {
        echo "El producto ha sido agregado al carrito. Se ha enviado un correo a la tienda.";
    } else {
        echo "Hubo un problema al enviar el correo.";
    }
}
?>
