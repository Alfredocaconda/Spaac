<?php 
    require('../../control/conexao.php');
    $dados = null;
    if(isset($_GET['id_autor'])){
        $id = $_GET['id_autor'];
        $sql = $conect->prepare("SELECT * FROM autor where id_autor =?");
        $sql->bindParam(1,$id);
        $sql->execute();
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
    }
?>

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
      
      
    <!--LINKS EXTERNO -->
    <link rel="stylesheet" href="../principal/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../principal/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../principal/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../principal/vendors/linericon/style.css">
    <link rel="stylesheet" href="../principal/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../principal/vendors/owl-carousel/owl.carousel.min.css">

    
    <link rel="stylesheet" href="../principal/css/style.css">
    <link rel="stylesheet" href="../principal/css/main.css">
    <link rel="stylesheet" href="../principal/css/master.css">
    <!-- END LINKS EXTERNO -->

      <title>SPAAC - REGISTAR AUTORES </title>
      
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
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logoSpaac.png" alt="#" title="SPAAC"/></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user.png" alt="#" /></div>
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
                     <li><a href="index.php"><i class="fa fa-clock-o orange_color"></i> <span>Home</span></a></li>
                    
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Cadastro</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="cadastroAutor.php"> <span>Autores</span></a></li>
                           <li><a href="cadastroMonografia.php"> <span>Monografias</span></a></li>
                           <li><a href="cadastroArtigo.php"> <span>Artigos Científicos</span></a></li>
                           <li><a href="cadastroCategoria.php"> <span>Categoria</span></a></li>
                           <li><a href="cadastroRevisao.php"> <span>Revisão</span></a></li>
                           <li><a href="cadastroRevisor."> <span>Revisor</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Lista de Arquivos</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="autor.php"> <span>Autores</span></a></li>
                           <li><a href="monografia.php"> <span>Monografias</span></a></li>
                           <li><a href="artigo.php"> <span>Artigos Científicos</span></a></li>
                           <li><a href="categoria.php"> <span>Categória</span></a></li>
                           <li><a href="revisao.php"> <span>Revisão</span></a></li>
                           <li><a href="revisor.php"> <span>Revisor</span></a></li>
                           <li><a href="usuario.php"> <span>Usuário</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../index.php"><i class="fa fa-cog yellow_color"></i> <span>Bloguer - SPAAC</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content-->
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Usuário</span></a>
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
                    
                      <!-- CADASTRO DE AUTORES -->
                     <!-- graph -->
                     <div class="row column2 graph margin_bottom_30">
                        <div class="col-md-l2 col-lg-12">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Cadastro de Autores</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content">
                                          <div class="area_chart">
                                             <div class="form">
                                             
                                                <div class="formulario">
                                                    <?php if(isset($dados)){ ?>
                                                         <form action="../../control/editarAutor.php?id_autor=<?php echo $dados['id_autor'] ?>" method="post">
                                                    <?php }else{ ?>
                                                          <form action="../../control/cadastroControllerAutor.php" method="post">
                                                    <?php } ?>
           
            <div class="form-group">
                <label for="">Telefone</label> <br>
                <input type="text" name="telefone" value="<?php if(isset($dados)) echo $dados['telefone'] ?>">
            </div>
            <div class="form-group">
                <label for="">Instituição vinculado</label> <br>
                <input type="text" name="instituicao_vinculado" value="<?php if(isset($dados)) echo $dados['instituicao_vinculado'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nacionalidade</label> <br>
                <input type="text" name="nacionalidade_autor" value="<?php if(isset($dados)) echo $dados['nacionalidade_autor'] ?>">
            </div>
            <div class="form-group">
                <label for="">Grau Académico</label> <br>
                <input type="text" name="grau_academico" value="<?php if(isset($dados)) echo $dados['grau_academico'] ?>">
            </div>
    
            <div class="form-group">
                <button class="btn">
                    <?php 
                        if(isset($dados))
                            echo "Actualizar";
                        else
                            echo "Cadastrar"
                    ?>
                </button>
            </div>
        </form>
    </div>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end graph -->
                     <!-- end Cadastro -->
                   
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by Spaac All rights reserved.<br><br>
                           <!--Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>-->
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