<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SPAAC - Home</title>
	<link rel="icon" href="../../../../img/Fevicon.png" type="../../../../img/png">

  <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/linericon/style.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../../estilo/style.css">
  <style>
    .image{
      width: 150px;
    height: 70px;
    }
    h1{
      text-align:center;
    }
  </style>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img class="image" src="../../logotipo/spaac1.jpg" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="">Inicio</a></li> 
              <li class="nav-item"><a class="nav-link" href="../../lista.php">Artigo Cientificos</a></li> 
              <li class="nav-item"><a class="nav-link" href="../../lista1.php">Monografia</a></li> 
              <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="https://www.facebook.com/profile.php?id=100063929982758" target="_blank"><i class="ti-facebook"></i></a></li>
              <li><a href="https://ispm.direccao@hotmail.com" target="_blank"><i class="ti-email"></i></a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
        
  <main class="site-main">
    <!--================Hero Banner start =================--> 
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div style="text-align:center; margin-left:-14px; " class="col-md-6">
            <form style="width:200%"  action="/principal" method="Post" enctype="multipart/form-data" class="row g-3">
              <div class="col-md-6">
                <input style="text-align:center;" type="text" class="form-control" id="inputAddress" name="nome"
                placeholder="PESQUISAR">
                <button style="margin-left:100%;margin-top:-66px;" class="btn btn-primary">Pesquisar</button>
              </div>
            </form>
          </div>
          <div class="hero-banner__content">
            <h3>Artigos Cientificos & Monografia</h3>
            <h1>SPAAC</h1>
            <h4>SISTEMA DE PULICAÇÃO E AVALIÇÃO DE ARTIGOS CIENTIFICOS</h4>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->  

    <!--================ Blog slider start =================--> 
    <h1> DESTAQUES DAS MONOGRAFIAS</h1>  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
          <div class="card blog__slide text-center">
            <div class="blog__slide__content">
              <?php foreach ($monografia->linhas as $item): ?>
                <h3>Titulo :<?=$item->titulo_monografia ?></h3>
                <p>Autor : <?=$item->nome_usuario ?></p>
                <p><a href="/arquivos?id=<?php echo $item->id_monografia; ?>"target="_blank">Visualizar</a></p>
              <?php endforeach ?> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  
    <!--================ Blog slider start =================--> 
    <h1> DESTAQUES ARTIGOS CIENTIFICOS</h1>  
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
          <div class="card blog__slide text-center">
            <div class="blog__slide__content">
              <?php foreach ($artigo->linhas as $item): ?>
                <h3>Titulo : <?=$item->titulo ?></h3>
                <p>Autor : <?=$item->nome_usuario ?></p>
              <?php endforeach ?> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->  

    
  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
       
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
            <a href="https://www.facebook.com/profile.php?id=100063929982758" target="_blank"><i class="ti-facebook"></i></a>
            <a href="https://ispm.direccao@hotmail.com" target="_blank"><i class="ti-email"></i></a>
            
              
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../../jscript/jquery.ajaxchimp.min.js"></script>
  <script src="../../jscript/mail-script.js"></script>
  <script src="../../jscript/main.js"></script>
</body>
</html>