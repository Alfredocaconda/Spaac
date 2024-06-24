<?php
#controller da Revisor
include "Controller/RevisorController.php";
#controller da monografia
include "Controller/monografiaController.php";

include "Controller/autorController.php";
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
#Controller Artigo
include "Controller/artigoController.php";
#Controller Principal
include "Controller/principalController.php";
#Controller Dashboard
include "Controller/dashboardController.php";
#direcionando a url para as paginas
 try {
    //code...
    switch ($url) {

        case '/principal':
            # rota da pagina inicial...
            principalController::index();
            break;
        case '/principal2':
            # rota da pagina inicial...
            principalController::principal2();
            break;

        case '/':
                # rota da para o Início do Dashboard...
                dashboardController::dashboard();
                break;

         case '/login':
            # rota da pagina inicial...
            LoginController::index();
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
            LoginController::save();
            break;
        case '/cadastrarUsuario/form':
            # rota para autenticar...
            LoginController::login();
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
        case '/autor':
            # chamando a class controlcom a funcao de pagina inicial...
            autorController::index();
            break;
        case '/autor/form':
            # chamando a class control com a funcao de formulario...
            autorController::form();
            break;
        case '/autor/form/save':
            autorController::save();
            break;
        case '/autor/delete':
            autorController::delete();
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