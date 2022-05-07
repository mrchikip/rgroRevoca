<?php include("includes/header.php"); ?>
<?php include ("dbusr.php"); ?>

<div class="col-md-8 mx-auto">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Fecha Firma</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $query = "SELECT * FROM firmantes WHERE id = $id";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fecha'] ?></td>
                </td>
            </tr>
            <?php 
        }
        } ?>

        </tbody>
    </table>
</div>

<?php include("includes/footer.php"); ?>