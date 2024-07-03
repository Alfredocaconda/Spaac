<?php

try {
  
   include "Dao/RevisorDao.php";
   $Revisor= new RevisorDao();
   $listar_Revisor=$Revisor->select();
   $total_Revisor=count($listar_Revisor);

   include "Dao/monografiaDao.php";
   $monografia= new monografiaDao();
   $listar_monografia=$monografia->select();
   $total_monografia=count($listar_monografia);

   include "Dao/artigoDao.php";
   $artigo= new artigoDao();
   $listar_artigo=$artigo->select();
   $total_artigo=count($listar_artigo);
} catch (Exception $ex) {
   //throw $th;
   echo $ex->getMessage();
}
?>
<!DOCTYPE html>
<html lang="PT">
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
                           <h6>User</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Menu</h4>
                  <ul class="list-unstyled components">
                  <li><a href="/dashboard"> <img src="../images/img/home2.png" width="30"> <span>Home</span></a></li>

                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle">
                         <img src="../images/img/cadastro.png" width="30"><span>Cadastro</span></a>
                         <ul class="collapse list-unstyled" id="dashboard">
                            
                           <li><a href="autor/form"><img src="../images/img/user.png" width="30"> <span>Autores</span></a></li>
                           <li><a href="monografia/form"><img src="../images/img/monografia.png" width="30"> <span>Monografias</span></a></li>
                           <li><a href="artiogo/form"><img src="../images/img/artigo.png" width="30"> <span>Artigos Científicos</span></a></li>
                           <li><a href="categoria/form"><img src="../images/img/categoria.png" width="30"> <span>Categoria</span></a></li>
                           <li><a href="Revisao/form"><img src="../images/img/revisao.png" width="30"> <span>Revisão</span></a></li>
                           <li><a href="Revisor/form"> <img src="../images/img/revisor.png" width="30"><span>Revisor</span></a></li>
                           
                        </ul>
                     </li>

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Lista de Arquivos</span></a>
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
                                       <img class="img-responsive rounded-circle" src="../../../layout_img/user_img.jpg" alt="#" />
                                       <span class="name_user">User</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">Meu Perfil</a>
                                       <a class="dropdown-item" href="/"><span>Sair</span> <i class="fa fa-sign-out"></i></a>
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
                              <img src="../images/img/revisao.png" class="ImgCadUser" width="60">
                              <h2 class="titleRA">Fazer uma Revisão</h2>
                        
                           </div>

                           </div>
                        </div>
                     </div>
                     
    <!--Conteudos Main content -->
    <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
    <!-- /.content-header -->
    <form action="/publicacao/form/save" method="Post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_publicacao"  value="<?= $model->id_publicacao  ?>" >
        
        <div class="col-md-6">
         <select name="id_Revisor" id="id_Revisor">
            <option>SELECIONAR O Revisor</option>
            <?php for($i=0;$i<$total_Revisor;$i++):?>
            <option value="<?= $listar_Revisor[$i]->id_Revisor ?>"
            ><?= $listar_Revisor[$i]->nome_revisor ?></option>
            <?php endfor ?>
         </select>
        </div>
        <br>
        <br>
        <div class="col-md-6">
         <select name="id_monografia" id="id_monografia">
            <option>SELECIONAR A MONOGRAFIA</option>
            <?php for($i=0;$i<$total_monografia;$i++):?>
            <option value="<?= $listar_monografia[$i]->id_monografia ?>"
            ><?= $listar_monografia[$i]->titulo_monografia ?></option>
            <?php endfor ?>
         </select>
        </div>
        <br>
        <br>
        <div class="col-md-6">
         <select name="id_artigo_cientifico" id="id_artigo_cientifico">
            <option>SELECIONAR O ARTIGO CIENTIFICO</option>
            <?php for($i=0;$i<$total_artigo;$i++):?>
            <option value="<?= $listar_artigo[$i]->id_artigo ?>"
            ><?= $listar_artigo[$i]->titulo ?></option>
            <?php endfor ?>
         </select>
        </div>
        <br>
        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">COMENTÁRIO</label>
        <input type="text" class="form-control" name="data_publicacao" value="<?= $model->comentario ?>" id="inputEmail4" 
        placeholder="DIGITE AQUI O SEU COMENTARIO" required>
        </div>
        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">DATA DA PUBLICAÇÃO</label>
        <input type="date" class="form-control" name="data_publicacao" value="<?= $model->data_publicacao ?>" id="inputEmail4" 
        placeholder="DIGITE AQUI A SUA DATA DE TERMINO" required>
        </div>
        <div class="col-md-6">
        <br>
        <select name="decisao" id="decisao">
            <option>SELECIONAR A DESCISÃO</option>
            <option>APROVADO</option>
            <option>REPROVADO</option>
         </select>
        </div>
       
        <div class="col-12">
        <button type="submit" class="btn btn-primary"><img src="../images/img/verificar.png" width="30">Guardar</button>
        <button type="reset" class="btn btn-primary" id="btnClean"><img src="../images/img/delete.png" width="30">Limpar</button>
        <a href="/Revisao" class="btn btn-primary" id="btnVerRegisto"><img src="../images/img/ver.png" width="30">Ver os registos</a>
        </div>
    </form>
    </div>
    </div>
     </div>
    </div>
       
    </section>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">YSJ</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../js/animate.js"></script>
      <!-- select country -->
      <script src="../js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="../js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="../js/Chart.min.js"></script>
      <script src="../js/Chart.bundle.min.js"></script>
      <script src="../js/utils.js"></script>
      <script src="../js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../js/chart_custom_style1.js"></script>
      <script src="../js/custom.js"></script>
</body>
</html>