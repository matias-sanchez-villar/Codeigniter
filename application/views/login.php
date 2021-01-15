<!DOCTYPE html>
<html>

<body>

    <div class="container">
        <h2>Ingreso: </h2>
        <?= validation_errors(); ///mensaje de error ?>
        <form action="<?= base_url("Login/validate"); ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="mail" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>

</body>

</html>