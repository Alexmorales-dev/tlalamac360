<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>hola</title>
</head>
<body>
<?php
    include 'config.php';
    include 'templates/nav.php';
?>
<!-- CARRUSEL -->
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Inicio/home1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Inicio/home2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Inicio/home3.png" class="d-block w-100" alt="...">
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
<img src="images/Diseño/calendario maya.png" alt="..." class="calendariomaya d-block mx-auto mt-5">
    <h1 class="TLALAMAC">TLALAMAC</h1>
<!--contenido-->
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-6 p-4">
                <h1 class="title_text">ULTIMAS NOTICIAS</h1>
                <h2 class="sub_text"> Lorem ipsum dolor sit amet consectetur </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nostrum unde eaque reprehenderit distinctio mollitia quas sint temporibus dolorum illum soluta incidunt, sapiente nam, est enim dolorem explicabo repellendus rem.</p>
                <div class="caja_img">
                    <img class="caja_img" src="images/Parroquia/FB_IMG_1783363353435.jpg" alt="...">
                </div>
            </div>
            <div class="col-6 p-4">
                <h1 class="title_text">VIDEO ACTIVIDADES</h1>
                <iframe 
                    width="315"
                    height="576" 
                    src="https://www.youtube.com/embed/GzZ7FV-mmLM" 
                    title="How to create a Product App in Figma - UI/ UX Design #shorts" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <div class="mapa">
                    <h1 class="title_text mt-5">UBICACIÓN</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15092.92380930809!2d-98.82100911730869!3d18.965405065460832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce4071b45713df%3A0xcb5991c1f1073b81!2s56976%20San%20Andr%C3%A9s%20Tlalamac%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1783557291788!5m2!1ses-419!2smx" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php
        include 'templates/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>