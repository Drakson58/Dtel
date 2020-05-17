<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['tela_de_bolsistas'] = array(
			'route' => '/tela_de_bolsistas',
			'controller' => 'indexController',
			'action' => 'tela_de_bolsistas'
		);

		$routes['pag_cursos'] = array(
			'route' => '/pag_cursos',
			'controller' => 'indexController',
			'action' => 'pag_cursos'
		);

		$routes['laboratorios_segunda'] = array(
			'route' => '/laboratorios_segunda',
			'controller' => 'indexController',
			'action' => 'laboratorios_segunda'
		);

		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);

		$routes['Cadastrar_bolsista'] = array(
			'route' => '/Cadastrar_bolsista',
			'controller' => 'AppController',
			'action' => 'Cadastrar_bolsista'
		);


		$routes['realizar_cadastro'] = array(
			'route' => '/realizar_cadastro',
			'controller' => 'AppController',
			'action' => 'realizar_cadastro'
		);

		$routes['situacao_presenca'] = array(
			'route' => '/situacao_presenca',
			'controller' => 'AppController',
			'action' => 'situacao_presenca'
		);

		$routes['Cadastrar_professor'] = array(
			'route' => '/Cadastrar_professor',
			'controller' => 'AppController',
			'action' => 'Cadastrar_professor'
		);

		$routes['realizar_cadastro_professor'] = array(
			'route' => '/realizar_cadastro_professor',
			'controller' => 'AppController',
			'action' => 'realizar_cadastro_professor'
		);

		# Páginas de horarios
		$routes['laboratorios_terca'] = array(
			'route' => '/laboratorios_terca',
			'controller' => 'IndexController',
			'action' => 'laboratorios_terca'
		);

		$routes['laboratorios_quarta'] = array(
			'route' => '/laboratorios_quarta',
			'controller' => 'IndexController',
			'action' => 'laboratorios_quarta'
		);

		$routes['laboratorios_quinta'] = array(
			'route' => '/laboratorios_quinta',
			'controller' => 'IndexController',
			'action' => 'laboratorios_quinta'
		);

		$routes['laboratorios_sexta'] = array(
			'route' => '/laboratorios_sexta',
			'controller' => 'IndexController',
			'action' => 'laboratorios_sexta'
		);

		$routes['situacao_laboratorio'] = array(
			'route' => '/situacao_laboratorio',
			'controller' => 'AppController',
			'action' => 'situacao_laboratorio'
		);

		
		$this->setRoutes($routes);
	}

}

?>