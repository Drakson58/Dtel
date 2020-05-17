<?php

namespace App\Controllers;

# Importando as classes

//Recursos do mini
use  MF\Controller\Action;
use MF\Model\Container;

//Os models


class AppController extends Action {

    public function Cadastrar_bolsista(){

        $this->view->erro = false;
        $this->render('Cadastro_bolsista');
    }


    public function realizar_cadastro(){

        $bolsista = Container::getModel('Bolsista');
        $bolsista->__set('turno', $_POST['turno']);
        $bolsista->__set('nome_bolsista', $_POST['nome_bolsista']);
        $bolsista->__set('email_bolsista', $_POST['email_bolsista']);
        $bolsista->__set('senha_bolsista', $_POST['senha_bolsista']);

        if(count($bolsista->verifica_bolsista()) == 0 && $bolsista->verifica_campos()){

            $bolsista->cadastrar_bolsista();
            $bolsista->cadastrar_em_usuario();
            $this->view->erro = false;
            $this->render('Cadastro_bolsista');
        }else {
            
            $this->view->erro = true;
            $this->render('Cadastro_bolsista');
        } 
    }

    public function Configuracao_bolsista(){

        $bolsista = Container::getModel('Bolsista');
        $this->view->bolsistas = $bolsista->mostrar_bolsista();
        $this->render('Configuracao_bolsista');
    }

    public function apagar_bolsista(){

        
        $bolsista = Container::getModel('Bolsista');
        $bolsista->apagar_bolsista();
        $this->render('Configuracao_bolsista');
    }


    public function situacao_presenca(){     
        /*
        echo $_POST['situacao_bolsista'];
        echo $_GET['id'];
        */

        $bolsista = Container::getModel('Bolsista');
        $bolsista->__set('id_bolsista', $_GET['id']);
        $bolsista->__set('situacao', $_POST['situacao_bolsista']); 
        $bolsista->altera_presenca();
       
        header('Location: /tela_de_bolsistas');
    }


    public function Cadastrar_professor(){

        $this->render('Cadastro_professor');
    }


}


?>