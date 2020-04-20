<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio Artesanal Online || Mis pedidos</title>
</head>

<body>
    <?php require('components/header_logout.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <img src="images/sad.png" alt="imagen_sin_pedidos" class="img-fluid rounded mx-auto my-3">
        </div>
        <div class="row">
            <p class="h1 mx-auto">¡Usted no tiene pedidos!</p>
        </div>
        <div class="row my-3">
            <a href="store.php" class="btn btn-danger mx-auto text-white">Regresar a la tienda, quiero seguir comprando.</a>            
        </div>
    </div>

    <?php require('components/footer.php'); ?>
    <?php require('components/scripts.php'); ?>

</body>

</html>