<?php

try {
   include "Dao/categoriaDao.php";
   $categoria_dao= new categoriaDao();
   $listar_categoria=$categoria_dao->select();
   $total_categoria=count($listar_categoria);

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
                  <h4>GERAL</h4>
                  <ul class="list-unstyled components">
                  <li><a href="/"> <img src="../images/img/home2.png" width="30"> <span>Home</span></a></li>

                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                         class="dropdown-toggle">
                         <img src="images/img/cadastro.png" width="30"><span>Cadastrar</span></a>
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
                        <li><a href="/monografia_admin_"><img src="images/img/monografia.png" width="30"> <span>Monografias</span></a></li>
                        <li><a href="/artigo_admin_"><img src="images/img/artigo.png" width="30"> <span>Artigos Científicos</span></a></li>
                        </ul>
                     </li>
                     <li><a href="/principal2"><img src="images/img/blog.png" width="30"> <span>Bloguer - SPAAC</span></a></li>
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
                                       <a class="dropdown-item" href="/principal2"><span>Sair</span> <i class="fa fa-sign-out"></i></a>
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
                              <img src="../images/img/artigo.png" class="ImgCadUser" width="60">
                              <h2 class="titleRA">Submeter o Artigo Científico</h2>
                        
                           </div>

                           </div>
                        </div>
                     </div>
            
       <form action="/artigo/form/save" method="Post" enctype="multipart/form-data" class="row g-3">
        <input type="hidden" name="id_artigo"  value="<?= $model->id_artigo ?>" >
        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">TITULO</label>
        <input type="text" class="form-control" name="titulo" value="<?= $model->titulo ?>" id="inputEmail4" 
        placeholder="DIGITE AQUI O SEU TITULO" required>
        </div>
       
        <div class="col-md-6">
        <label for="resumo" class="form-label">RESUMO</label>
        <textArea type="text" class="form-control" id="inputAddress"
         value="<?= $model->resumo ?>" name="resumo"
        placeholder="DIGITE AQUI O RESUMO" required>
         </textArea>
        </div>
        <div class="col-md-6">
        <label for="volume" class="form-label">VOLUME</label>
        <input type="text" class="form-control" id="inputAddress"
         value="<?= $model->volume ?>" name="volume"
        placeholder="DIGITE AQUI O VOLUME" required>
        </div>
        
        <div class="col-md-6">
        <label for="palavra_chave" class="form-label">PALAVRA CHAVE</label>
        <input type="text" class="form-control" id="inputAddress"
         value="<?= $model->palavra_chave ?>" name="palavra_chave"
        placeholder="DIGITE AQUI A SUA PALAVRA CHAVE" required>
        </div>
        
        <div class="col-md-6">
        <label for="ficheiro" class="form-label">FICHEIRO</label>
        <input type="file" class="form-control" id="inputAddress"
         value="<?= $model->ficheiro ?>" name="ficheiro"
        placeholder="CARREGA O FICHEIRO" required>
        </div>
        <div class="col-md-6">
        <label for="capa" class="form-label">IMAGEM DA CAPA</label>
        <input type="file" class="form-control" id="inputAddress"
         value="<?= $model->capa ?>" name="capa"
        placeholder="CARREGA A IMAGEM DA CAPA" required>
        </div>
      </br>
        <br>
        <div class="col-md-6">
         <select name="id_autor" id="id_autor">
            <option>SELECIONAR O CATEGORIA</option>
            <?php for($i=0;$i<$total_categoria;$i++):?>
            <option value="<?= $listar_categoria[$i]->id_categoria ?>"
            ><?= $listar_categoria[$i]->nome_categoria ?></option>
            <?php endfor ?>
         </select>
        </div>
        <br>
        <div class="col-12">
        <button type="submit" class="btn btn-primary"><img src="../images/img/verificar.png" width="30">Guardar</button>
        <button type="reset" class="btn btn-primary" id="btnClean"><img src="../images/img/delete.png" width="30">Limpar</button>
        <a href="/artigo" class="btn btn-primary" id="btnVerRegisto"><img src="../images/img/ver.png" width="30">Ver os registos</a>
        </div>
    </form>
    </div>
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