<?php

include ("dbadm.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM firmantes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $id = $row['id'];
        $folio = $row['folio'];
        $fecha = $row['fecha'];
    }
      
}

if (isset($_POST['update_firma'])) {
    $nombre = $_POST['nombre'];
    $id = $_GET['id'];
    $folio = $_POST['folio'];
    $fecha = $_POST['fecha'];

    $query = "UPDATE firmantes SET nombre = '$nombre', id = '$id', folio = '$folio', fecha = '$fecha' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Firmante Actualizado';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}


?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <td>Cedula </td><td class="mx-auto"><?php echo $row['id'] ?></td>
                    </div>
                    <div class="form-group">
                    <td>Nombre </td><input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualiza el Nombre Completo Del Firmante" autofocus>
                    </div>
                    <div class="form-group">
                    <td>Folio </td><input type="number" name="folio" value="<?php echo $folio; ?>" class="form-control" placeholder="Actualiza el Folio de la firma" >
                    </div>
                    <div class="form-group">
                    <td>Fecha Firma </td><input type="date" name="fecha" value="<?php echo $fecha; ?>" class="form-control" placeholder="Actualiza la Fecha de la firma" >
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="update_firma" value="Actualizar Firma">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>