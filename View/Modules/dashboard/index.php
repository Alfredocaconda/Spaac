
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SPAAC - ADMIN </title>
      
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!--Icon Title-->
      <link rel="icon" href="../principal/img/logoSpaac.png" type="image/png">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
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
                        <div class="user_img"><img class="img-responsive" src="images/img/user3.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Usuário</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Geral</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.php"> <img src="images/img/home2.png" width="30"> <span>Home</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img src="images/img/cadastro.png" width="30"> <span>Cadastro</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="cadastroAutor.php"><img src="images/img/user.png" width="30"> <span>Autores</span></a></li>
                           
                           <li><a href="cadastroMonografia.php"><img src="images/img/monografia.png" width="30"> <span>Monografias</span></a></li>
                           <li><a href="cadastroArtigo.php"><img src="images/img/artigo.png" width="30"> <span>Artigos Científicos</span></a></li>
                           <li><a href="cadastroCategoria.php"><img src="images/img/categoria.png" width="30"> <span>Categoria</span></a></li>
                           <li><a href="cadastroRevisao.php"><img src="images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="cadastroRevisor.php"> <img src="images/img/revisor.png" width="30"><span>Revisor</span></a></li>
                           <li><a href="cadastroUsuario.php"> <img src="images/img/cadUser2.png" width="30"><span>Usuário</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Lista de Arquivos</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="autor.php"><img src="images/img/user.png" width="30"> <span> <span>Autores</span></a></li>
                           <li><a href="monografia.php"> <img src="images/img/monografia.png" width="30"><span>Monografias</span></a></li>
                           <li><a href="artigo.php"> <img src="images/img/artigo.png" width="30"><span>Artigos Científicos</span></a></li>
                           <li><a href="categoria.php"> <img src="images/img/categoria.png" width="30"><span>Categória</span></a></li>
                           <li><a href="revisao.php"><img src="images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="revisor.php"><img src="images/img/revisor.png" width="30"> <span>Revisor</span></a></li>
                           <li><a href="usuario.php"><img src="images/img/cadUser2.png" width="30"> <span>Usuário</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../index.php"><!--<i class="fa fa-cog yellow_color"></i>--> <img src="images/img/blog.png" width="30"> <span>Bloguer - SPAAC</span></a></li>
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
                        
                           <a href="index.php"><img class="img-responsive" src="images/logo/letra.png" alt="#" /></a>
                           
                        </div>
                         
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/img/user3.png" alt="#" /><span class="name_user">Usuário</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">Perfil</a>
                                       <a class="dropdown-item" href="settings.html">Definições</a>
                                       <a class="dropdown-item" href="help.html">Ajuda</a>
                                       <a class="dropdown-item" href="../../control/sair.php"><span>Sair</span> <i class="fa fa-sign-out"></i></a>
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
                           </div>
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
                                    <p class="total_no">2500</p>
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
                                    <p class="total_no">123.50</p>
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
                                    <p class="total_no">1,805</p>
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
                                    <p class="total_no">54</p>
                                      <p class="head_couter">Revisores</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                 
                     <div class="row column3">
                        <!-- MOnografia -->
                        <div class="col-md-6">
                           <div class="dark_bg full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Monografias</h2>
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
                                                   <div class="img-box"><img src="images/layout_img/msg2.png" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Paulo Ricardo</b>Engenheiro & Web Design</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/msg5.png" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Helder Manuel</b>Analista de Dados</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>José Sopite</b>Especialista em Base de Dados</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
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
                                                   <div class="img-box"><img src="images/layout_img/msg4.png" alt=""></div>
                                                   <p class="testimonial">Sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Jorge Leão</b>Chefe de TI & Programador</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/msg2.png" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>Martins Miranda </b>Analista de Sistema</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/msg3.png" alt=""></div>
                                                   <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                   <p class="overview"><b>José Catuto</b>Especialista em Sistema Corporativas</p>
                                                </div>
                                                <div class="item carousel-item">
                                                   <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                   <p class="testimonial">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit cum esse aliquam iste minus repudiandae ipsam harum consequatur magnam.</p>
                                                   <p class="overview"><b>Yuri Tchilingue</b>Especialista em Design Robustos</p>
                                                </div>
                                             </div>
                                             <!-- Carousel controls -->
                                             <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                             <i class="fa fa-angle-left"></i>
                                             </a>
                                             <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                             <i class="fa fa-angle-right"></i>
                                             </a>
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
                        <p>Copyright © 2024 Designed by Spaac All rights reserved.<br><br>
                           
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>