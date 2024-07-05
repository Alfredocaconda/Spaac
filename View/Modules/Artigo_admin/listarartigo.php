<!DOCTYPE html>
<html lang="en">
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
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_info">
                           <h6><?=$_SESSION['nome_usuario']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>GERAL</h4>
                  <ul class="list-unstyled components">
                  <li><a href="../dashboard"> <img src="../images/img/home2.png" width="30"> <span>Home</span></a></li>

                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle">
                         <img src="../images/img/cadastro.png" width="30"><span>Cadastrar</span></a>
                         <ul class="collapse list-unstyled" id="dashboard">
                         <li><a href="/Funcionario/form"><img src="images/img/user.png" width="30"> <span>Funcionário</span></a></li>
                           <li><a href="/monografia_admin/form"><img src="images/img/monografia.png" width="30"> <span>Monografias</span></a></li>
                           <li><a href="/artigo_admin/form"><img src="images/img/artigo.png" width="30"> <span>Artigos Científicos</span></a></li>
                           <li><a href="/categoria/form"><img src="images/img/categoria.png" width="30"> <span>Categoria</span></a></li>
                           <li><a href="Revisao/form"><img src="images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="/Revisor/form"> <img src="images/img/revisor.png" width="30"><span>Revisor</span></a></li>
                           
                        </ul>
                     </li>

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Listar</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="usuario"><img src="../images/img/cadUser2.png" width="30"> <span>Usuário</span></a></li>
                           <li><a href="autor"><img src="../images/img/user.png" width="30"> <span> <span>Autores</span></a></li>
                           <li><a href="monografia"> <img src="../images/img/monografia.png" width="30"><span>Monografias</span></a></li>
                           <li><a href="artigo"> <img src="../images/img/artigo.png" width="30"><span>Artigos Científicos</span></a></li>
                           <li><a href="categoria"> <img src="../images/img/categoria.png" width="30"><span>Categória</span></a></li>
                           <li><a href="Revisao"><img src="../images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="Revisor"><img src=".../images/img/revisor.png" width="30"> <span>Revisor</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../index.php"><!--<i class="fa fa-cog yellow_color"></i>--> <img src="../images/img/blog.png" width="30"> <span>Bloguer - SPAAC</span></a></li>
                     
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
                             <img class="img-responsive" src="../../../images/logo/SPAACbranco.png" alt="#" />
                           </a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                       <span class="name_user"><?=$_SESSION['nome_usuario']?></span></a>
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
                              <h2>Lista de todos Artigos científicos cadastrados</h2>
                           </div>
                        </div>
                     </div>
    <table class="table table-hover">
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">TITULO</th>
            <th scope="col">RESUMO</th>
            <th scope="col">VOLUME</th>
            <th scope="col">DATA DE SUBMISSÃO</th>
            <th scope="col">NOME</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        <?php foreach ($model->linhas as $item): ?>
        <tr>
           <td scope="col"><?=$item->id_artigo_cientifico?></td>
           <td scope="col"><?=$item->titulo?></td>
           <td scope="col"><?=$item->resumo?></td>
           <td scope="col"><?=$item->volume?></td>
           <td scope="col"><?=$item->data_submissao?></td>
           <td scope="col"><?=$item->nome_usuario?></td>
           <td scope="col"><?=$item->nome_categoria?></td>
            <td width=10px;> <a href="/artigo/delete?id_artigo=<?=$item->id_artigo?>"
            class="btn btn-danger">APAGAR</a></td>
            <td width=10px;> <a href="/artigo/form?id_artigo=<?=$item->id_artigo?>"
            class="btn btn-success">EDITAR</a></td>
        </tr>
        <?php endforeach ?> 
    </table>
    </div>
    <a href="/artigo/form" class="btn btn-primary" id="btnVerRegisto"><img src="../images/img/cadastro.png" width="30">Add novo</a>        
    <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024. All rights reserved.<br><br>
                           Distributed By: SPAAC </p>
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