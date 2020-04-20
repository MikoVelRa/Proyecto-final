<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio artesanal online || Editar cliente</title>
</head>

<body>
    <?php require('components/header_admin.php'); ?>

    <div class="container-fluid">
        <h1 class="text-center my-3">Actualizar cliente</h1>
        <div class="row">
            <div class="col-4 mx-auto">
                <form action="edit_client.php" method="post" class="form-group my-2">
                    <div class="row my-3">
                        <div class="col-1"><i class="fas fa-user fa-2x my-1"></i></div>
                        <div class="col-11"><input class="form-control mx-1" placeholder="Nombre" type="text" required></div>                        
                    </div>
                    <div class="row my-3">
                        <div class="col-1"><i class="fas fa-male fa-2x my-1"></i></div>
                        <div class="col-11"><input class="form-control mx-1" placeholder="Apellidos" type="text" required></div>                        
                    </div>
                    <div class="row my-3">
                        <div class="col-1"><i class="fas fa-users fa-lg my-3"></i></div>
                        <div class="col-11"><input class="form-control mx-1" placeholder="Nombre de usuario" type="text" required></div>                        
                    </div>
                    <div class="row my-3">
                        <div class="col"><button class="btn btn-primary btn-block"><span><i class="fas fa-edit mx-2"></i></span>Actualizar datos</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require('components/footer.php'); ?>
    <?php require('components/scripts.php'); ?>

</body>

</html>