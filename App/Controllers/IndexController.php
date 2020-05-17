<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function tela_de_bolsistas() {
		
		$bolsista = Container::getModel('Bolsista');
		$this->view->bolsistas = $bolsista->mostrar_bolsista();
		$this->render('tela_de_bolsistas');
	}

	public function pag_cursos(){

		$this->render('pag_cursos');
	}

	public function laboratorios(){

		$this->render('laboratorios');
	}

}


?>