<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <title>ArtiMex || Tu sitio Artesanal Online || Home</title>
</head>

<body>

    <!--Header-->
    <?php require('components/header.php'); ?>

    <!-- Body-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" id="carrusel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/art1.png" class="d-block w-100" alt="artesanía_1">
            </div>
            <div class="carousel-item">
                <img src="images/art2.jpg" class="d-block w-100" alt="artesanía_2">
            </div>
            <div class="carousel-item">
                <img src="images/art3.jpg" class="d-block w-100" alt="artesanía_3">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="aboutUs">
        <div class="row">
            <div class="col-5 my-2">
                <img src="images/artesanos.jpeg" alt="artesanos" class="img-fluid">
            </div>
            <div class="col-7 my-2">
                <h3>¿Quiénes somos?</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur culpa repudiandae molestiae temporibus amet distinctio aperiam mollitia qui architecto, cupiditate quo sunt, recusandae dolor deserunt autem quod ex iure perspiciatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eaque, maiores porro praesentium sapiente totam perspiciatis officia molestias eos molestiae ex? Corporis sapiente in corrupti minus, recusandae autem deleniti consequuntur!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eaque, maiores porro praesentium sapiente totam perspiciatis officia molestias eos molestiae ex? Corporis sapiente in corrupti minus, recusandae autem deleniti consequuntur!</p>
            </div>
        </div>
    </div>    

    <!--Footer-->
    <?php require('components/footer.php'); ?>

    <!--Scripts de animación de Bootstrap-->
    <?php include('components/scripts.php'); ?>
</body>

</html>