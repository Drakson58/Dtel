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

		$routes['laboratorios'] = array(
			'route' => '/laboratorios',
			'controller' => 'indexController',
			'action' => 'laboratorios'
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

		$routes['Configuracao_bolsista'] = array(
			'route' => '/Configuracao_bolsista',
			'controller' => 'AppController',
			'action' => 'Configuracao_bolsista'
		);
		
		$routes['apagar_bolsista'] = array(
			'route' => '/apagar_bolsista',
			'controller' => 'AppController',
			'action' => 'apagar_bolsista'
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


		$this->setRoutes($routes);
	}

}

?>