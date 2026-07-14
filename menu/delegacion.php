<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>DELEGACION</title>
</head>
<body>
    <?php
        include '../config.php';
        include '../templates/nav.php';
    ?>
<!--CARRUSEL-->
 <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/Inicio/index.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/Inicio/index2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/Inicio/index3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--Logo-->
<img src="../images/calendario maya.png" alt="..." class="calendariomaya d-block mx-auto mt-5">
    <h1 class="TLALAMAC">TLALAMAC</h1>
<!--CONTENIDO-->
    <h1>delegacion</h1>

    <?php
        include '../templates/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>