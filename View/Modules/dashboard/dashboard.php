<!DOCTYPE html>
<html lang="pt">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SPAAC</title>

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

       <!--Link para Reajuste-->
       <link rel="stylesheet" href="../../../css/StyleGeral.css">

      <!-- site icon -->
      <link rel="icon" href="../../../fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../../../style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../../../css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../../../css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../../../css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../../../css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../../../css/custom.css" />
          
   </head>
   <body class="dashboard dashboard_1">
      
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
               <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logoSpaac.png" alt="#" title="SPAAC"/></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_info">
                           <h6><?php echo $_SESSION['nome_usuario'] ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Menu</h4>
                  <ul class="list-unstyled components">
                  <li><a href="/dashboard"> <img src="images/img/home2.png" width="30"> <span>Home</span></a></li>

                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle">
                         <img src="images/img/cadastro.png" width="30"><span>Cadastro</span></a>
                         <ul class="collapse list-unstyled" id="dashboard">
                            
                           <li><a href="autor/form"><img src="images/img/user.png" width="30"> <span>Autores</span></a></li>
                           <li><a href="monografia/form"><img src="images/img/monografia.png" width="30"> <span>Monografias</span></a></li>
                           <li><a href="artigo/form"><img src="images/img/artigo.png" width="30"> <span>Artigos Científicos</span></a></li>
                           <li><a href="categoria/form"><img src="images/img/categoria.png" width="30"> <span>Categoria</span></a></li>
                           <li><a href="Revisao/form"><img src="images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="Revisor/form"> <img src="images/img/revisor.png" width="30"><span>Revisor</span></a></li>
                           
                        </ul>
                     </li>

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Lista de Arquivos</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="../../../lista1.php"> <img src="images/img/monografia.png" width="30"><span>Monografias</span></a></li>
                           <li><a href="../../../lista.php"> <img src="images/img/artigo.png" width="30"><span>Artigos Científicos</span></a></li>
                        </ul>
                     </li>
                     <li><a href="/admin">
                        <img src="images/img/blog.png" width="30"> <span>Bloguer - SPAAC</span></a></li>
                     
                     </li>
                     </li>
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
               <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="/dashboard">
                          
                             <img class="img-responsive" src="../../../logotipo/spaac1.jpg" alt="#" />
                           </a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                       <img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" />
                                       <span class="name_user"><?php echo $_SESSION['nome_usuario'] ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="/logout"><span>Sair</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Visão geral</h2>
                              
                           </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                 <img src="images/img/user.png" width="50">
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p class="total_no">
                                        <?php
                                        include "./Connection/conexao.php";
                                          // Consulta SQL para contar os usuários
                                          $sql = "SELECT COUNT(id_autor) as id_autor FROM consultaautorusuario";
                                          $result = $conexao->query($sql);
                                          if ($result->num_rows > 0) {
                                             // Exibe o número de usuários cadastrados
                                             $row = $result->fetch_assoc();
                                             echo "<h1>".$row["id_autor"]."</h1>";
                                          } else {
                                             echo "<h1>0</h1>";
                                          } 
                                       ?>
                                    </p>
                                    <p class="head_couter">Autores</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                 <img src="images/img/monografia.png" width="50">
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p class="total_no">
                                        <?php
                                        include "./Connection/conexao.php";
                                          // Consulta SQL para contar os usuários
                                          $sql = "SELECT COUNT(id_monografia) as id_monografia FROM vmonografia";
                                          $result = $conexao->query($sql);
                                          if ($result->num_rows > 0) {
                                             // Exibe o número de usuários cadastrados
                                             $row = $result->fetch_assoc();
                                             echo "<h1>".$row["id_monografia"]."</h1>";
                                          } else {
                                             echo "<h1>0</h1>";
                                          } 
                                       ?>
                                    </p>
                                    <p class="head_couter"> Monografias</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                 <img src="images/img/artigo.png" width="50">
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p class="total_no">
                                        <?php
                                        include "./Connection/conexao.php";
                                          // Consulta SQL para contar os usuários
                                          $sql = "SELECT COUNT(id_artigo_cientifico) as id_artigo_cientifico FROM vartigo";
                                          $result = $conexao->query($sql);
                                          if ($result->num_rows > 0) {
                                             // Exibe o número de usuários cadastrados
                                             $row = $result->fetch_assoc();
                                             echo "<h1>".$row["id_artigo_cientifico"]."</h1>";
                                          } else {
                                             echo "<h1>0</h1>";
                                          } 
                                       ?>
                                    <p class="head_couter">Artigos Científicos</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                 <img src="images/img/revisor.png" width="50">
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <p class="total_no">
                                        <?php
                                        include "./Connection/conexao.php";
                                          // Consulta SQL para contar os usuários
                                          $sql = "SELECT COUNT(id_revisor) as id_revisor FROM vrevisor";
                                          $result = $conexao->query($sql);
                                          if ($result->num_rows > 0) {
                                             // Exibe o número de usuários cadastrados
                                             $row = $result->fetch_assoc();
                                             echo "<h1>".$row["id_revisor"]."</h1>";
                                          } else {
                                             echo "<h1>0</h1>";
                                          } 
                                       ?>
                                      <p class="head_couter">Revisores</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                 
                     <div class="row column3">
                        <!-- MOnografia -->
                        <div class="col-md-6">
                           <div class="full margin_bottom_30 bg_BlueLight">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2 class="title_white">Monografias</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <?php foreach ($monografia->linhas as $item): ?>
                                                   <p class="testimonial">Titulo : <?=$item->titulo_monografia ?></p>
                                                   <p class="overview"><b>Autor : <?=$item->nome_usuario ?></b>Categoria : <?=$item->nome_categoria ?></p> 
                                                   <?php endforeach ?> 
                                                </div>
                                             </div>
                                            
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end monografia -->
                      
                         <!-- Artigo Cientifico -->
                         <div class="col-md-6">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Artigos Científicos</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content testimonial">
                                          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                             <!-- Wrapper for carousel items -->
                                             <div class="carousel-inner">
                                                <div class="item carousel-item active">
                                                   <?php foreach ($artigo->linhas as $item): ?>
                                                   <p class="testimonial">Titulo : <?=$item->titulo ?></p>
                                                   <p class="overview"><b>Autor : <?=$item->nome_usuario ?></b>Categoria : <?=$item->nome_categoria ?></p> 
                                                   <?php endforeach ?> 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end testimonial -->
                     </div>
                    
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by SPAAC All rights reserved.<br><br>
                           
                        </p>
                     </div>
                  </div>

                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../../../js/jquery.min.js"></script>
      <script src="../../../js/popper.min.js"></script>
      <script src="../../../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../../../js/animate.js"></script>
      <!-- select country -->
      <script src="../../../js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../../../js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../../../js/Chart.min.js"></script>
      <script src="../../../js/Chart.bundle.min.js"></script>
      <script src="../../../js/utils.js"></script>
      <script src="../../../js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../../../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../../../js/chart_custom_style1.js"></script>
      <script src="../../../js/custom.js"></script>
   </body>
</html>