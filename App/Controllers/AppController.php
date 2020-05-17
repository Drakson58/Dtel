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


    public function situacao_presenca(){
        
        echo $_POST['situacao_bolsista'];
        echo $_GET['id'];

        $bolsista = Container::getModel('Bolsista');
        $bolsista->__set('id_bolsista', $_GET['id']);
        $bolsista->__set('situacao', $_POST['situacao_bolsista']); 
        $bolsista->altera_presenca();
       
        header('Location: /tela_de_bolsistas');
    }


    public function Cadastrar_professor(){

        $this->render('Cadastro_professor');
    }


    public function realizar_cadastro_professor(){ //dia

        $professor = Container::getModel('Professor');
        $professor->__set('dia_aula', $_POST['dia']);
        $professor->__set('turno', $_POST['turno']);
        $professor->__set('laboratorio', $_POST['laboratorio']);
        $professor->__set('horario', $_POST['horario']);
        $professor->__set('nome_professor', $_POST['nome_professor']);
        $professor->__set('turma', $_POST['turma']);
        $professor->__set('disciplina', $_POST['nome_materia']);
        
        if($_POST['dia'] == 'segunda'){

            $professor->cadastrar_em_segunda();
        }else if($_POST['dia'] == 'terca'){

            $professor->cadastrar_em_terca();
        }else if($_POST['dia'] == 'quarta'){

            $professor->cadastrar_em_quarta();
        }else if($_POST['dia'] == 'quinta'){

            $professor->cadastrar_em_quinta();
        }else if($_POST['dia'] == 'sexta'){

            $professor->cadastrar_em_sexta();
        }

        $this->render('Cadastro_professor');
    }


    public function situacao_laboratorio(){

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        if($_POST['situacao_lmc1'] == 'Livre'){
            
        }
    }
}


?>