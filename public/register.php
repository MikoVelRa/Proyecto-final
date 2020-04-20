<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Registro de nuevo cliente</title>
</head>

<body>
    <?php include('components/header.php'); ?>

    <div class="container-fluid mb-3">
        <h1 class="text-center mx-2 my-2">Registro de clientes</h1>
        <div class="row">
            <div class="col-6">
                <img src="images/customer.png" width="75%" height="100%" class="mx-5">
            </div>
            <div class="col-6">
                <form class="px-2 py-2" action="index_altern.php">
                    <div class="form-group">
                        <label for="name">Nombre (s)</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellidos</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="user">Nombre de usuario</label>
                        <input type="text" class="form-control" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass">
                    </div>
                    <div class="form-group">
                        <label for="passw">Repetir contraseña</label>
                        <input type="password" class="form-control" id="pass2">
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Registrarme</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('components/footer.php'); ?>
    <?php include('components/scripts.php'); ?>
</body>

</html>