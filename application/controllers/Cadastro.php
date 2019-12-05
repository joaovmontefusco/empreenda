<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Cadastro
 * 
 * @author Bernardo Pinheiro Camargo
 * @since 2019
 */
class Cadastro extends MY_Controller
{

	/**
	 * 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');	
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");

		$this->template->use_module('cadastro');
		$this->template->loadModules();

		$this->template->render('master', 'cadastro');
	}

	public function cadastrar()	{
		$post = $this->input->post();

		if ($this->Usuarios_model->create($post)) {
			$this->session->set_flashdata('retorno', 'Usuário cadastrado');
		} else {
			$this->session->set_flashdata('retorno', 'Errou');
		}


		redirect(site_url(), 'location');
	}
}
