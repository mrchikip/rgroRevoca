<?php include("dbusr.php"); ?>

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
            <h3 align="center">Introduzca El Numero de Cedula a Consultar</h3>
            <div class="card card-body">
                <form action="check_task.php" method="POST">
                   <div class="form-group">
                        <div class="form-group">
                            <p align="center">Sin Espacios Ni Signos de Puntuacion</p>
                            <input type="number" name="id" class="form-control" placeholder="Cedula Del Firmante"
                                required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Acepta Politica Para El Tratamiento De Datos Personales
                            <a href="pdatos.php">(ver aqui)</a></label>
                        </div>
                        <div><input type="submit" class="btn btn-success btn-block" name="check" value="Validar Firma"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>