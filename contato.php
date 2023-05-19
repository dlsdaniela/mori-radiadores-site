<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Mori Radiadores</title>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="css/global.css"/>
      <link rel="stylesheet" href="css/header.css"/>
      <link rel="stylesheet" href="css/footer.css"/>
      <link rel="stylesheet" href="css/contato/contact.css"/>


   </head>
   <header>
      <?php include('components/menu.php')?>
   </header>
   <body>
    <div class="banner-others">
     <img src="assets/banner-nossaEmpresa.jpg" width="100%"/>
    </div>
    <section class="contact-page">
      <div class="container">
         <div class="content wrapper-contact-page d-flex">
            <div class="form-contact">
               <div class="title-contact">
                  <h1>Envie-nos uma mensagem</h1>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
               </div>
               <form>
                  <div class="form-contact-wrapper d-flex">
                     <input type="text" class="" id="name" placeholder="Nome" required=""/>
                     <input type="text" class="" id="lastName" placeholder="Sobrenome" required=""/>
                  </div>
                  <div class="form-contact-wrapper d-flex">
                     <input type="text" class="" id="cel" placeholder="Celular" required=""/>
                     <input type="text" class="" id="subject" placeholder="Assunto" required=""/>
                  </div>
                  <div class="form-contact-wrapper d-flex">
                     <textarea id="textarea" name="mensagem" placeholder="Informe sua mensagem..." required=""></textarea>
                  </div>
                  <div class="form-contact-wrapper-button">
                     <button class="form-control btn" type="submit">Enviar mensagem</button>
                  </div>
               </form>
            </div>
            <div class="information-contact d-flex flex-column">
               <div class="information-contact-card d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fa fa-cloud"></i>
                  </div>
                  <div class="text">
                     <h4>Numero do celular</h4>
                     <span>Atendimento: (11) 9 9561-9826 </span> 
                     <br>   
                     <span>Cobrança: (11) 9 7331-3584 </span>
                     <br>   
                     <span>Estoque: (11) 9 7480-0321 </span>
                  </div>
               </div>
               <div class="information-contact-card d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fa fa-cloud"></i>
                  </div>
                  <div class="text">
                     <h4>E-mail</h4>
                     <span>moriradiadores@gmail.com</span>    
                  </div>
               </div>
               <div class="information-contact-card d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                  <i class="fa fa-cloud"></i>
                  </div>
                  <div class="text">
                     <h4>Localização</h4>
                     <span>Rua Campos Salles, nª25 - Matadouro - Bragança Paulista</span>    
                  </div>
               </div>
            </div>
         </div>
      </div>
     
   </section>

   <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.160850699295!2d-46.54052132367505!3d-22.94430253921489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cec98bf15b145f%3A0x824a368c5cb35494!2sMori%20Radiadores!5e0!3m2!1spt-BR!2sbr!4v1683600372879!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <footer>
         <?php include('components/footer.php')?>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html>