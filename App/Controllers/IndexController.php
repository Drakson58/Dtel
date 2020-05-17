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

	public function laboratorios_segunda(){
		$professor = Container::getModel('Professor');
		$this->view->horario_segunda = $professor->horarios_segunda();

		$bolsista = Container::getModel('Bolsista');
		$this->view->bolsistas = $bolsista->mostrar_bolsista();
		$this->render('laboratorios_segunda');
	}

	# Rederização dos dias dos laboratorios
	
	public function laboratorios_terca(){

		$this->render('laboratorios_terca');
	}

	public function laboratorios_quarta(){

		$this->render('laboratorios_quarta');
	}

	public function laboratorios_quinta(){

		$this->render('laboratorios_quinta');
	}

	public function laboratorios_sexta(){

		$this->render('laboratorios_sexta');
	}
}


?>