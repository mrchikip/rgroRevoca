<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.php");
    exit();
}
?>
<?php include("dbadm.php"); ?>

<?php include("includes/header.php"); ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); }?>

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo Del Firmante"
                            autofocus>
                    </div>
                    <div class="form-group">
                        <input type="number" name="id" class="form-control" placeholder="Cedula Del Firmante">
                    </div>
                    <div class="form-group">
                        <input type="number" name="folio" class="form-control" placeholder="Folio de la firma">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" class="form-control" placeholder="Fecha de la firma">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_firma" value="Guardar Firma">
            </div>
            </form>
        </div>

        <div class="col-md-8 mx-auto">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Folio</th>
                        <th>Fecha Firma</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $query = "SELECT * FROM firmantes";
                $result_signs = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result_signs)) { ?>
                    <tr>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['folio'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning btn-sm"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
            </table>


        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>