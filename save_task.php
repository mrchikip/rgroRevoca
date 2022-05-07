<?php

include("dbadm.php");

if (isset($_POST['save_firma'])) {
    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $folio = $_POST['folio'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO firmantes (nombre, id, folio, fecha) VALUES ('$nombre', '$id', '$folio', '$fecha')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Firma Guardada Con Exito';
    $_SESSION['message_type'] = 'success';
    header('Location: secreta.php');
}

?>