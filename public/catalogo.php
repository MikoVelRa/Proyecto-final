<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio artesanal online || Inventario</title>
</head>

<body>
    <?php require('components/header_editor.php'); ?>

    <div class="container-fluid">
        <p class="h1 my-3 text-center">Inventario de productos</p>
        <div class="row">
            <div class="container table-responsive">   
                <div class="row col-6 mx-auto my-2">
                    <div class="col-8"><input type="text" class="form-control" id="search" placeholder="Buscar por producto"></div>
                    <div class="col-4"><button class="btn btn-success btn-block">Buscar</button></div>
                </div>                                             
                <table class="table my-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Clave producto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Existencias</th>
                            <th scope="col">Gestionar información</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pulsera rarámuri</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>José Feliciano</td>
                            <td>$200.00</td>
                            <td>50</td>
                            <td>
                                <a href="edit_product.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                                <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pulsera rarámuri</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>José Feliciano</td>
                            <td>$200.00</td>
                            <td>50</td>
                            <td>
                                <a href="edit_product.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                                <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pulsera rarámuri</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>José Feliciano</td>
                            <td>$200.00</td>
                            <td>50</td>
                            <td>
                                <a href="edit_product.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                                <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="add_product.php" class="btn btn-success float-right mt-3 text-white"><span class="float-left mx-2"><i class="fas fa-plus-circle"></i></span>Agregar nuevo producto</a>
            </div>
        </div>
    </div>
    <?php require('components/footer.php'); ?>
    <?php include('components/scripts.php'); ?>

</body>

</html>