<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Para utilizar los icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>
<body>
        <!-- Ejemplo profe -->
    <!-- <h1 class = "text-center mb-2 mt-3">Inicio de sesión</h1> -->
    <!-- <div class="d-grid col-2 mx-auto mt-5"> -->
            <!-- <button type="submit" class="btn btn-dark">Iniciar Sesión</button> -->
    <!-- </div> -->
    <!-- <i id = "apple" class="bi bi-apple"></i> -->
    <!-- <button type="button" class="btn btn-dark ">Dark</button> -->

    <!-- LO MIO -->
    <!-- TITULO -->
    <h1 class = "text-center mb-2 mt-3">Iniciar Sesión</h1>
    <i id = "person" class="bi bi-person-circle"></i>

    <!-- INPUTS -->
    <div class="input-group flex-nowrap mx-auto">
        <span class="input-group-text" id="addon-wrapping">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap mx-auto">
        <span class="input-group-text" id="addon-wrapping">*</span>
        <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
    </div>

    <!-- BUTTON  -->
    <div class="d-grid col-2 mx-auto mt-5">
        <button type="button" class="btn btn-outline-danger">Iniciar Sesión</button>
    </div>
</body>
</html>