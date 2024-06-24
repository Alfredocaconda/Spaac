<?php 
    
    require("../../control/conexao.php");
    $user = $conect->query("select * from artigo_cientifico");
    $dados = $user->fetchAll();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../principal/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../principal/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../principal/css/master.css">
    <title>SPAAC - Autor</title>
    
    
    <link rel="icon" href=".principal/img/sem titulo.png" type="image/png">

  <link rel="stylesheet" href="../principal/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../principal/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../principal/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../principal/vendors/linericon/style.css">
  <link rel="stylesheet" href="../principal/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../principal/vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="../principal/css/style.css">
  <!--Link para style -->
  <link rel="stylesheet" href="../principal/css/main_style.css">
  <!--End-->
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="../principal/img/sem titulo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li> 
              <li class="nav-item"><a class="nav-link" href="../principal/archive.php">Autores</a></li> 
              <li class="nav-item"><a class="nav-link" href="../principal/category.php">Monografias</a>
              <li class="nav-item"><a class="nav-link" href="../principal/category.php">Artigos</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog-details.php">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="../principal/contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="View/Admin/login.php">Login</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="principal/autor.php" type="submit" class="btn btn-primary">Autor</a></li>
              <!-- <li><a href="#"><i class="ti-skype"></i></a></li> -->
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
</head>
    <div class="Operacao">
        <div class="titulo">
            <h4>Lista dos Artigos</h4>
        </div>
        
        <div class="tabelas">
            <div style="margin-bottom:10px">
                <a href="cadastroArtigo.php" class="btncadastro">Cadastrar</a>
            </div>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
			            <th>Resumo</th>
                        <th>Volume</th>
                        <th>Data da Submissão</th>
                        <th>Data da Avaliação</th>
                        <th>Palavra Chave</th>
                        <th>Ficheiro</th>
                        <th>Nome do Autor</th>
                        <th>Nome da Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($dados as $item){
                    ?>
                    <tr>
                        <td><?php echo $item['id_artigo_cientifico'] ?></td>
                        <td><?php echo $item['titulo'] ?></td>
                        <td><?php echo $item['resumo'] ?></td>
                        <td><?php echo $item['volume'] ?></td>
                        <td><?php echo $item['data_submissao'] ?></td>
                        <td><?php echo $item['data_avaliacao'] ?></td>
                        <td><?php echo $item['palavra_chave'] ?></td>
                        <td><?php echo $item['ficheiro'] ?></td>
                        <td><?php echo $item['id_autor'] ?></td>
                        <td><?php echo $item['id_categoria'] ?></td>
                        <td>
                            <a href="cadastroArtigo.php?id_artigo_cientifico=<?php echo $item['id_artigo_cientifico'] ?>">Editar</a>
                            <a href="../../Control/apagarArtigo.php?id_artigo_cientifico=<?php echo $item['id_artigo_cientifico'] ?>&estado=apagar">Apagar</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>