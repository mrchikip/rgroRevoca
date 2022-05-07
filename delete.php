<?php

include ("dbadm.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM firmantes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Firmante Eliminado';
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
}

?>