<!DOCTYPE html>
<html lang="pt-pt">
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
                  <li><a href="../dashboard.php"> <img src="../images/img/home2.png" width="30"> <span>Home</span></a></li>

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
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Listar os Dados do Funcionario</h2>
                           </div>
                        </div>
                     </div>
                     
    <div class="container">
   <!--LINHA-->
   <div class="row">
      <!--coluna-->
      <div class="col"> 
            <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
               <form class="d-flex" action="Listar_form.php" method="POST" role="search">
                  <input class="form-control me-2" type="search" name="buscar" placeholder="Nome do Funionario" aria-label="Search" autofocus>
                     <button class="btn btn-outline-success" type="submit">Pesquisar</button>
               </form>
            </div>
            </nav>
    <table class="table table-hover">
        <tr>
            <th  scope="col">NOME</th>
            <th scope="col">GENERO</th>
            <th scope="col">BILHETE</th>
            <th scope="col">ESTADO</th>
            <th scope="col">FUNÇÃO</th>
            <th scope="col">DATA DE NASCIMENTO</th>
            <th scope="col">TELEFONE/EMAIL</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">OPÇÕES</th>
        </tr>
        <?php foreach ($model->linhas as $item): ?>
        
            <td scope="col" ><?=$item->nome?> </td>
            <td scope="col"><?=$item->genero?> </td>
            <td scope="col"><?=$item->bilhete?> </td>
            <td scope="col"><?=$item->estado?> </td>
            <td scope="col"> <?=$item->cargo?></td>
            <td scope="col"> <?=$item->data_nascimento?></td>
            <td scope="col"> <?=$item->telefone_email?></td>
            <td scope="col"> <?=$item->endereco?></td>
            <td width=10px; > <a href="/funcionario/delete?idf=<?=$item->idf?>" class="btn btn-danger">APAGAR</a></td>
            <td width=10px; > <a href="/funcionario/form?idf=<?=$item->idf?>" class="btn btn-success">EDITAR</a></td>
        </tr>
        <?php endforeach ?> 
    </table>
    </div>
    </div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">SPAAC</a>.</strong>
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