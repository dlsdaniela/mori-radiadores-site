<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Mori Radiadores</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="css/global.css"/>
      <link rel="stylesheet" href="css/header.css"/>
      <link rel="stylesheet" href="css/footer.css"/>
      <link rel="stylesheet" href="css/produtoServicos/customerAdvantages.css"/>
      <link rel="stylesheet" href="css/produtoServicos/applicationSolutions.css"/>

   </head>
   <header>
      <?php include('components/menu.php')?>
   </header>
   <body>
    <div class="banner-others">
     <img src="assets/banner-nossaEmpresa.jpg" width="100%"/>
    </div>
    <?php include('components/produtoServicos/customerAdvantages.php')?>
    <?php include('components/produtoServicos/applicationSolutions.php')?>

     
      <footer>
         <?php include('components/footer.php')?>
      </footer>
      <script src="javascript/mobile-navbar.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html>