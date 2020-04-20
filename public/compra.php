<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu tienda de Artesanías Online || Pedido</title>
</head>

<body>

    <?php include('components/header_logout.php'); ?>

    <div class="container-fluid mt-2">
        <h1 class="text-center">Resúmen del pedido</h1>
    </div>

    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Resúmen del pedido
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="height: 8rem;">
                            <div class="row media">
                                <div class="col-2">
                                    <img src="images/art1.png" alt="imagen de artesanía" class="img-thumbnail align-self-start mr-3" style="height: 95px;">
                                </div>
                                <div class="col-10">
                                    <p class="h5">Jarrón de la región de Kalakmul</p>
                                    <ul class="list-group list-group-flush" style="list-style: none;">
                                        <li class=""><small>Aquí va la descripción del producto.</small></li>
                                        <li class=""><small>Autor y origen</small></li>
                                        <li class=""><small>$200</small></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="height: 8rem;">
                            <div class="row media">
                                <div class="col-2">
                                    <img src="images/art1.png" alt="imagen de artesanía" class="img-thumbnail align-self-start mr-3" style="height: 95px;">
                                </div>
                                <div class="col-10">
                                    <p class="h5">Pulseras michoacanas</p>
                                    <ul class="list-group list-group-flush" style="list-style: none;">
                                        <li class=""><small>Aquí va la descripción del producto.</small></li>
                                        <li class=""><small>Autor y origen</small></li>
                                        <li class=""><small>$150.00</small></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" style="height: 8rem;">
                            <div class="row media">
                                <div class="col-2">
                                    <img src="images/art1.png" alt="imagen de artesanía" class="img-thumbnail align-self-start mr-3" style="height: 95px;">
                                </div>
                                <div class="col-10">
                                    <p class="h5">Güayabera tabasqueña</p>
                                    <ul class="list-group list-group-flush" style="list-style: none;">
                                        <li class=""><small>Aquí va la descripción del producto.</small></li>
                                        <li class=""><small>Autor y origen</small></li>
                                        <li class=""><small>$2000.00</small></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid my-2">
                    <button class="btn btn-danger btn-block" id="sidebarCollapse1">Editar pedido</button>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="card" style="width: 100%; height: 23rem">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Método de pago</h5>
                        <p class="card-text text-center mb-4">Para continuar con su compra, seleccione su tarjeta como forma de pago.</p>
                        <div class="container my-3">
                            <select class="custom-select my-2">
                                <option selected>Seleccione tarjeta...</option>
                                <option value="1">Tarjeta 1234 5678 9009 8765</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Ingrese la dirección de envío" aria-label="Username" aria-describedby="basic-addon1">
                            <h5 class="card-title text-center my-4">Total a pagar: $2350.00</h5>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">Pagar ahora</a>
                    </div>
                </div>
                <div class="alert alert-success mt-2" role="alert">
                    <h4 class="alert-heading text-center">¡Compra realizada!</h4>                                        
                    <p class="mb-0 text-center"><small><a href="store.php">Seguir comprando</a></small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>


    <?php include('components/footer.php'); ?>
    <?php include('components/scripts.php'); ?>
</body>

</html>