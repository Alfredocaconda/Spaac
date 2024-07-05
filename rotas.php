<?php
#controller da Revisor
include "Controller/RevisorController.php";
#controller da monografia
include "Controller/monografiaController.php";
#controller da monografia
include "Controller/monografiaController_admin.php";
#controller da categoria
include "Controller/CategoriaController.php";
#controller da login
include "Controller/loginController.php";
#controller do erro
include "Controller/errorController.php";
#Controller Revisão
include "Controller/RevisaoController.php";
#Controller Usuário
include "Controller/usuarioController.php";
#
include "Controller/FuncionarioController.php";
#Controller Artigo
include "Controller/artigoController.php";
#Controller Artigo
include "Controller/artigoController_admin.php";
#Controller Principal
include "Controller/principalController.php";
#Controller Dashboard
include "Controller/dashboardController.php";
#direcionando a url para as paginas
include 'Controller/arquivosController.php';
 try {
    //code...
    switch ($url) {

        case '/principal':
            # rota da pagina inicial...
            principalController::index();
            break;
        case '/monografia_':
            # rota da pagina inicial...
            principalController::monografia();
            break;
        case '/artigo_':
            # rota da pagina inicial...
            principalController::artigo();
            break;
        case '/principal2':
            # rota da pagina inicial...
            principalController::principal2();
            break;
        case '/monografia_admin':
            # rota da pagina inicial...
            principalController::monografia_admin();
            break;
        case '/artigo_admin':
            # rota da pagina inicial...
            principalController::artigo_admin();
            break;
        case '/arquivos':
            # rota da pagina inicial...
            include "View/arquivos/lista.php";
            break;
        

        case '/':
                # rota da para o Início do Dashboard...
                dashboardController::dashboard();
                break;
         case '/login':
            # rota da pagina inicial...
            LoginController::index();
            break;
         case '/admin':
            # rota da pagina inicial...
            dashboardController::admin();
            break;
            
            case '/logout':
                # rota da pagina inicial...
                session_start();
                unset($_SESSION['nome_usuario']);
                unset($_SESSION['tipo_usuario']);
                principalController::index();
                break;
                
            case '/autenticacao':
                # rota para autenticar...
                LoginController::autenticar();
                break;

        case '/cadastrarUsuario':
            # rota para autenticar...
            usuarioController::form();
            break;
        case '/cadastrarUsuario/save':
            # rota para autenticar...
            usuarioController::save();
            break;
        case '/autenticacao':
            # rota para autenticar...
            LoginController::autenticar();
            break;

        case '/Revisor':
            # chamando a class controlcom a funcao de pagina inicial...
            RevisorController::index();
            break;
        case '/Revisor/form':
            # chamando a class control com a funcao de formulario...
            RevisorController::form();
            break;
        case '/Revisor/form/save':
            RevisorController::save();
            break;
        case '/Revisor/delete':
            RevisorController::delete();
            break;

        case '/usuario':
            # chamando a class controlcom a funcao de pagina inicial...
            usuarioController::index();
            break;
        case '/usuario/form':
            # chamando a class control com a funcao de formulario...
            usuarioController::form();
            break;
        case '/usuario/form/save':
            usuarioController::save();
            break;
        case '/usuario/delete':
            usuarioController::delete();
            break;


            //funcionario
            
            case '/Funcionario':
                # chamando a class controlcom a funcao de pagina inicial...
                FuncionarioController::index();
                break;
            case '/Funcionario/form':
                # chamando a class control com a funcao de formulario...
                FuncionarioController::form();
                break;
            case '/Funcionario/form/save':
                FuncionarioController::save();
                break;
            case '/Funcionario/delete':
                FuncionarioController::delete();
                break;


            #======================== ROTAS DA CATEGORIA=======================
        case '/categoria':
            # chamando a class controlcom a funcao de pagina inicial...
            CategoriaController::index();
            break;
        case '/categoria/form':
            # chamando a class control com a funcao de formulario...
            CategoriaController::form();
            break;
        case '/categoria/form/save':
            CategoriaController::save();
            break;
        case '/categoria/delete':
            CategoriaController::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo
            
            #======================== rotas de artigo=======================
        case '/Revisao':
            # chamando a class controlcom a funcao de pagina inicial...
            RevisaoController::index();
            break;
        case '/Revisao/form':
            # chamando a class control com a funcao de formulario...
            RevisaoController::form();
            break;
        case '/Revisao/form/save':
            RevisaoController::save();
            break;
        case '/Revisao/delete':
            RevisaoController::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo

            #======================== rotas de artigo=======================
        case '/artigo':
            # chamando a class controlcom a funcao de pagina inicial...
            artigoController::index();
            break;
        case '/artigo/form':
            # chamando a class control com a funcao de formulario...
            artigoController::form();
            break;
        case '/artigo/form/save':
            artigoController::save();
            break;
        case '/artigo/delete':
            artigoController::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo

            #======================== rotas de artigo=======================
        case '/artigo_admin':
            # chamando a class controlcom a funcao de pagina inicial...
            artigoController_admin::index();
            break;
        case '/artigo_admin/form':
            # chamando a class control com a funcao de formulario...
            artigoController_admin::form();
            break;
        case '/artigo_admin/form/save':
            artigoController_admin::save();
            break;
        case '/artigo_admin_update/form/save':
            artigoController_admin::update();
            break;
        case '/artigo_admin/delete':
            artigoController_admin::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo

            #======================== rotas de artigo=======================
        case '/monografia':
            # chamando a class controlcom a funcao de pagina inicial...
            monografiaController::index();
            break;
       
        case '/monografia/form':
            # chamando a class control com a funcao de formulario...
            monografiaController::form();
            break;
        case '/monografia/form/save':
            monografiaController::save();
            break;
        case '/monografia/delete':
            monografiaController::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo


            #======================== rotas de artigo=======================
        case '/monografia_admin':
            # chamando a class controlcom a funcao de pagina inicial...
            monografiaController_admin::index();
            break;
        case '/monografia_admin/form':
            # chamando a class control com a funcao de formulario...
            monografiaController_admin::form();
            break;
        case '/monografia_admin/form/save':
            monografiaController_admin::save();
            break;
        case '/monografia_admin_update/form/save':
            monografiaController_admin::update();
            break;
        case '/monografia_admin/delete':
            monografiaController_admin::delete();
            break;
            #============================= FIM DAS ROTAS DE artigo

        case '/dashboard':
            Error404Controller::dashboard();
            break;
       
        default:
            # code...
            Error404Controller::index();
            break;
  
            case '/ARTIGOS':
                # chamando a class controlcom a funcao de pagina inicial...
                artigoController::index();
                break;
        }
 } catch (Exception $ex) {
    //throw $th;
    echo $ex->getMessage();
 }
 
 
?>