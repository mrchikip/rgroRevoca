<?php include("dbadm.php"); ?>
<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="login.php" method="post">
                        <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario">
                        <br><br>
                        <input name="palabra_secreta" type="password" placeholder="Contraseña">
                        <br><br>
                        <input type="submit" value="Iniciar sesión">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<?php include("includes/footer.php"); ?>