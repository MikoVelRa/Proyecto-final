<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio Artesanal Online || Gestión de pedidos</title>
</head>

<body>
    <?php require('components/header_admin.php'); ?>

    <div class="container-fluid">
        <h1 class="text-center my-3">Lista de pedidos</h1>
        <div class="container">
            <div class="row col-6 mx-auto my-2">
                <div class="col-8"><input type="text" class="form-control" id="search" placeholder="Buscar por pedido"></div>
                <div class="col-4"><button class="btn btn-success btn-block">Buscar</button></div>
            </div>
            <table class="table my-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Pedido</th>
                        <th scope="col">Titular</th>
                        <th scope="col">Fecha de envío</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Fecha de entrega</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">¿Finiquitar pedido?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Manuel González</td>
                        <td>18/04/2020</td>
                        <td>Culiacán, Sinaloa.</td>
                        <td>20/04/2020</td>
                        <td>En camino</td>
                        <td><a href="">Ver detalles</a></td>
                        <td><a href="" class="btn btn-success">Finiquitar pedido</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Gisella Torres</td>
                        <td>20/04/2020</td>
                        <td>Ciudad de México.</td>
                        <td>22/04/2020</td>
                        <td>En camino</td>
                        <td><a href="">Ver detalles</a></td>
                        <td><a href="" class="btn btn-success">Finiquitar pedido</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Marcela López</td>
                        <td>18/05/2020</td>
                        <td>Austin, Texas.</td>
                        <td>20/05/2020</td>
                        <td>En camino</td>
                        <td><a href="">Ver detalles</a></td>
                        <td><a href="" class="btn btn-success">Finiquitar pedido</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php require('components/footer.php'); ?>
    <?php require('components/scripts.php'); ?>
</body>

</html>