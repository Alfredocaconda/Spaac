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
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../../style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../../css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../../css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../../css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../../css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../../css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="../../js/semantic.min.css" />
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                     <img width="210" src="../../logotipo/spaac1.jpg" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="/cadastrarUsuario/save" method="post">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Nome</label>
                              <input type="text" name="nome" placeholder="Nome" />
                           </div>
                           <div class="field">
                              <label class="label_field">Nº do Telefone</label>
                              <input type="number" name="telefone" placeholder="+244XXXXXXXXX" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Instituição</label>
                              <input type="text" name="instituicao" placeholder="Instituição Vinculado" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Formação</label>
                              <input type="text" name="formacao" placeholder="Formação Academico" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Nacionalidade</label>
                              <input type="text" name="nacionalidade" placeholder="Nacionalidade" />
                           </div>
                           
                           <div class="field">
                           <label class="label_field">Tipo</label>
                              <select name="tipo" id="" required>
                                 <option >Selecionar o Tipo</option>
                                 <option >Professor</option>
                                 <option >Estudante</option>
                              </select>
                           </div>
                           <div class="field">
                           <label class="label_field">Grau</label>
                              <select name="grau" id="" required>
                                 <option >Grau Academico</option>
                                 <option >PhD</option>
                                 <option >Mestrado</option>
                                 <option >Licenciado</option>
                                 <option >Bacharel</option>
                                 <option >Médio</option>
                              </select>
                           </div>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder="Email" required/>
                           </div>
                           <div class="field">
                              <label class="label_field">Senha</label>
                              <input type="password" name="senha" placeholder="Senha" required/>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden"></label>
                              <button class="main_bt">Enviar</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../../js/jquery.min.js"></script>
      <script src="../../js/popper.min.js"></script>
      <script src="../../js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="../../js/animate.js"></script>
      <!-- select country -->
      <script src="../../js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="../../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../../js/custom.js"></script>
   </body>
</html>