<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Mori Radiadores</title>
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="css/global.css"/>
      <link rel="stylesheet" href="css/header.css"/>
      <link rel="stylesheet" href="css/footer.css"/>
      <link rel="stylesheet" href="css/produtoServicos/customerAdvantages.css"/>
      <link rel="stylesheet" href="css/produtoServicos/applicationSolutions.css"/>
      <link rel="stylesheet" href="css/produtoServicos/applicationProducts.css"/>
   </head>
   <header>
      <?php include('components/menu.php')?>
   </header>
   <body>
      <div class="banner-others">
         <img src="assets/banners/banner-produtos-servicos.jpg" width="100%"/>
      </div>
      <section id="applicationSolutions">
         <?php include('components/produtoServicos/applicationSolutions.php')?>
      </section>
      <section id="customerAdvantages">
         <?php include('components/produtoServicos/customerAdvantages.php')?>
      </section>
      <section id="applicationProducts">
         <?php include('components/produtoServicos/applicationProducts.php')?>
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