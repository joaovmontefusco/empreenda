<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Cursos
 * 
 * @author Bernardo Pinheiro Camargo
 * @since 2019
 */
class Cursos extends MY_Controller
{

	
	public function __construct()
	{
		parent::__construct();
	}


	public function index(){

		$this->template->use_module('cursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos');
	}

	public function amazon()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/amazon');
	}
	public function amoremnutrir()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/amoremnutrir');
	}

	public function vendas()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/vendas');
	}

	public function bizagi()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/bizagi');
	}

	public function desfudencia()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/desfudencia');
	}

	public function gestaodeprojetos()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/gestaodeprojetos');
	}

	public function logica()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/logica');
	}

	public function manuntencaocel()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/manuntencaocel');
	}

	public function milmilhao()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/milmilhao');
	}

	public function mirna()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/mirna');
	}

	public function python()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/python');
	}

	public function formuladelancamento()
	{
		$this->template->use_module('detalhescursos');
		$this->template->loadModules();

		$this->template->render('master', 'cursos/formuladelancamento');
	}

}

