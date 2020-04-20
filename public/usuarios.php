<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio Artesanal Online || Gestión de clientes</title>
</head>

<body>
    <?php require('components/header_admin.php'); ?>

    <div class="container-fluid">
        <h1 class="text-center my-3">Lista de clientes</h1>
        <div class="container">
            <div class="row col-6 mx-auto my-2">
                <div class="col-8"><input type="text" class="form-control" id="search" placeholder="Buscar por cliente"></div>
                <div class="col-4"><button class="btn btn-success btn-block">Buscar</button></div>
            </div>
            <table class="table my-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Cliente</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">Gestionar usuarios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>pepito_89</td>
                        <td>José Manuel</td>
                        <td>Barrientos López</td>
                        <td>Cliente</td>
                        <td>
                            <a href="edit_client.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                            <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sr. Editor</td>
                        <td>Luisa Ericka</td>
                        <td>González Higuera</td>
                        <td>Editor</td>
                        <td>
                            <a href="edit_client.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                            <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sr. Administrador</td>
                        <td>Pepe</td>
                        <td>El Toro</td>
                        <td>Administrador</td>
                        <td>
                            <a href="edit_client.php" class="text-primary"><i class="fas fa-edit mx-2"></i></a>
                            <span><button class="btn"><i class="fas fa-trash mx-2 text-primary"></i></button></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php require('components/footer.php'); ?>
    <?php require('components/scripts.php'); ?>
</body>

</html>