<?php

namespace App\Controllers;

# Importando as classes

//Recursos do mini
use  MF\Controller\Action;
use MF\Model\Container;

//Os models


class AuthController extends Action {
    
    public function autenticar(){

        $usuario = Container::getModel('Usuario');
        $usuario->__set('email_usuario', $_POST['email']);
        $usuario->__set('senha_usuario', $_POST['senha']);
        $usuario->autenticar();

        
        if($usuario->__get('id_usuario') != '' && $usuario->__get('nome_usuario') != ''){
            
            session_start();
            $_SESSION['id_usuario'] = $usuario->__get('id_usuario');
            $_SESSION['nome_usuario'] = $usuario->__get('nome_usuario');           

            header('Location: /');
        }else{
        
            header('Location: /');
        }
              
    }

    public function sair(){

        session_start();
        session_destroy();
        header('Location: /');
    }

    
}


?>