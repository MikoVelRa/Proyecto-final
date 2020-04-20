<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio artesanal online || Nueva artesanía</title>
</head>

<body>
    <?php require('components/header_editor.php'); ?>

    <div class="container-fluid">
        <h1 class="text-center my-3">Agregar artesanía</h1>
        <div class="row">
            <div class="col-5">
                <div class="mx-5 my-2 shadow-lg rounded" style="width: 400px; height: 300px;">
                    <input type="file" class="custom-file-input mb-5" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file text-center my-5" for="inputGroupFile01">Seleccione una imagen...</label>
                </div>
            </div>
            <div class="col-7">
                <form action="add_product.php" method="post" class="form-group my-2">
                    <div class="row my-2">
                        <div class="col-8"><input class="form-control" type="text" placeholder="Nombre artesanía" required></div>
                        <div class="col-4">
                            <select class="form-control" required>
                                <option>Seleccione un estado</option>
                                <option value="">Aguscalientes</option>
                                <option value="">Baja California Norte</option>
                                <option value="">Baja California Sur</option>
                                <option value="">Aquí van mas estados...</option>

                            </select>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <textarea class="form-control" id="validationTextarea" placeholder="Agregue descripción de la artesanía" rows="5" required style="resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4"><input class="form-control" type="text" placeholder="Nombre artista" required></div>
                        <div class="col-4"><input class="form-control" type="text" placeholder="Precio" required></div>
                        <div class="col-4"><input class="form-control" type="number" placeholder="Existencias" min="0" required></div>                        
                    </div>
                    <div class="row my-3">
                        <div class="col"><button class="btn btn-primary btn-block"><span><i class="fas fa-plus-circle mx-2"></i></span>Añadir nueva artesanía</button></div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require('components/footer.php'); ?>
    <?php require('components/scripts.php'); ?>

</body>

</html>