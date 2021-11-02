<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Para utilizar los icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- TITULO -->
    <div class="container-fluid">
        <h1 class="text-center mb-1 mt-3 text-danger">Crear Usuario</h1>
        <i id="person" class="bi bi-person-plus-fill text-danger"></i>
    </div>


    <form method = "POST" action="">
            <div class="container-sm">
        <!-- INPUTS -->
        <div class="input-group flex-nowrap mx-auto">
            <input type="text" required = "" class="form-control" placeholder="Nombre de usuario" aria-label="username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto ">
            <input type="text" required = "" class="form-control" placeholder="Nombre" aria-label="name" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto">
            <input type="text" required = "" class="form-control" placeholder="Apellido" aria-label="lastname" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto ">
            <input type="text" required = "" class="form-control" placeholder="Cédula" aria-label="document" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto">
            <input type="text" required = "" class="form-control" placeholder="Teléfono" aria-label="phone" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto ">
            <input type="text" required = "" class="form-control" placeholder="Celular" aria-label="cellphone" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto">
            <input type="text" required = "" class="form-control" placeholder="Dirección" aria-label="addres" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto ">
            <input type="password" required = "" class="form-control" placeholder="Clave" aria-label="password" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mx-auto">
            <div class="form-floating mx-auto mb-3 col-12" style="height: 3rem;">
                <select class="form-select" id="floatingSelect" name="rol">
                    <option selected>Seleccione un rol</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Rol</label>
            </div>
        </div>

        <!-- BUTTON  -->
        <div class="d-grid col-2 mx-auto mt-2">
            <button type="submit" class="btn btn-outline-danger">Registrarse</button>
        </div>
    </div>
    </form>


    <!-- ACÁ ESTOY INTENTANDO METERLO EN UNA CARD -->
    <!-- <div class="card text-dark bg-light mb-3 mx-auto" style="max-width: 25rem;">
        <div class="card-header">
            <h1 class = "text-center mb-2 mt-3 text-danger">Iniciar Sesión</h1>
            <i id = "icon" class="bi bi-person-circle text-danger"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div> -->

</body>

</html>