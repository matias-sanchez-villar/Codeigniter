<!DOCTYPE html>
<html>

<body>

    <div class="container">
        <h2>Registro: </h2>
        <form action="registro/create" method="post">
            <div class="form-group">
                <label for="email">Nombre:</label>
                <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
            </div>
            <div class="form-group">
                <label for="email">Apellido:</label>
                <input type="text" class="form-control" placeholder="Apellido" name="Apellido">
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-3 col-form-label">Fecha de Nacimiento</label>
                <div class="col-9">
                    <input class="form-control" type="date" id="example-date-input" name="FechaNacimiento">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="mail" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="Pasword">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>

</body>

</html>