<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Mori Radiadores</title>
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/global.css"/>
      <link rel="stylesheet" href="css/header.css"/>
      <link rel="stylesheet" href="css/home/bannerPrincipal.css"/>
      <link rel="stylesheet" href="css/home/about.css"/>
      <link rel="stylesheet" href="css/home/productServices.css"/>
      <link rel="stylesheet" href="css/home/productsServices.css"/>
      <link rel="stylesheet" href="css/home/vantagensHome.css"/>
      <link rel="stylesheet" href="css/home/contactHome.css"/>
      <link rel="stylesheet" href="css/home/notices.css"/>
      <link rel="stylesheet" href="css/footer.css"/>
   </head>
   <header>
      <?php include('components/menu.php')?>
   </header>
   <body>
      <?php include('components/home/bannerPrincipal.php')?>
      <section id="aboutCompany">
         <?php include('components/home/about.php')?>
      </section>
      <section id="products-services" class="products-services d-flex flex-column">
         <div class="products-services-information d-flex flex-column justify-content-center align-items-center">
            <span class="title text-light fw-bold">Produtos e serviços</span>
            <span class="subtitle text-light">Vestibulum ante ipsum primis in faucibus</span>
            <span class="separador"></span>
         </div>

         <?php include('components/home/productsServices.php')?>
      </section>
      <section id="benefitsHome">
         <?php include('components/home/vantagensHome.php')?>
      </section>
      <section id="homeWhatsapp">
         <?php include('components/home/contactHome.php')?>
      </section>
      <section id="noticesHome">
         <?php include('components/home/notices.php')?>
      </section>
      
      <a href="https://api.whatsapp.com/send?phone=5511995619826" target="_blanck" class="whatsapp d-flex justify-content-center align-items-center">
         <span class="fa fa-whatsapp"></span>
      </a>
      <footer>
         <?php include('components/footer.php')?>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html>